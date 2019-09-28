<?php
namespace Budkovsky\Aid\Validator\Abstraction;

use Budkovsky\Aid\Abstraction\SilentModeInterface;
use Budkovsky\Aid\Abstraction\Observable;
use Budkovsky\Aid\Abstraction\Observer;
use Budkovsky\Aid\Collection\ObserverCollection;
use Budkovsky\Aid\Validator\Entity\ValidationResult;

abstract class ValidatorAbstract implements ValidatorInterface, SilentModeInterface, Observable, Observer
{
    /** @var bool */
    protected static $silentMode = false;

    /** @var ObserverCollection */
    protected $observers;

    /** @var ValidationResult */
    protected $result;

    public function __construct(string $name)
    {
        $this->observers = new ObserverCollection();
        $this->result = new ValidationResult($name);
    }


    public function isValid(): ?bool
    {
        return $this->result->isValid();
    }

    public function setSilentMode(bool $silentMode): ValidatorAbstract
    {
        static::$silentMode = $silentMode;

        return $this;
    }

    public function isSilentMode(): bool
    {
        return static::silentMode;
    }

    public function addObserver(Observer $observer): ValidatorAbstract
    {
        $this->observers->add($observer);

        return $this;
    }

    public function notifyObservers(?ValidationResult $validationReslut = null): ValidatorAbstract
    {
        foreach ($this->observers as $observer) {
            /** @var Observer $observer */
            $observer->observerUpdate($validationReslut);
        }

        return $this;
    }

    public function observerUpdate(?ValidationResult $validationResult = null): ValidatorAbstract
    {
        if ($validationResult) {
            $this->result->setValid(
                $this->result->isValid() === null
                ? $validationResult->isValid()
                : $this->result->isValid() && $validationResult->isValid()
            );
            if ($validationResult->getLastMessage() !== null) {
                $this->result->setLastMessage($validationResult->getLastMessage());
            }
            $this->result->addChild($validationResult);
        }

        return $this;
    }

    public function getResult(): ValidationResult
    {
        return $this->result;
    }
}
