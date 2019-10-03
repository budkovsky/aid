<?php
namespace Budkovsky\Aid\Validator\Abstraction;

use Budkovsky\Aid\Abstraction\SilentModeInterface;
use Budkovsky\Aid\Abstraction\Observable;
use Budkovsky\Aid\Abstraction\Observer;
use Budkovsky\Aid\Collection\ObserverCollection;
use Budkovsky\Aid\Validator\Entity\ValidationResult;
use Budkovsky\Aid\Abstraction\StaticFactoryInterface;

use Budkovsky\Aid\Abstraction\EntityInterface;
use Budkovsky\Aid\Collection\ValidatorCollection;

abstract class ValidatorAbstract implements ValidatorInterface, SilentModeInterface, Observable, Observer, StaticFactoryInterface
{
    /** @var string */
    protected $name;

    /** @var bool */
    protected static $silentMode = false;

    /** @var ObserverCollection */
    protected $observers;

    /** @var ValidationResult */
    protected $result;

    /** @var ValidatorCollection */
    protected $extensions;

    public function __construct(?string $name =null)
    {
        $this->name = $name ?? \substr(static::class, 0, \strpos(self::class, 'Validator'));
        $this->observers = new ObserverCollection();
        $this->result = new ValidationResult($this->name);
        $this->extensions = new ValidatorCollection();
    }

    public static function create(?string $name = null): ValidatorAbstract
    {
        return new static($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isValid(): ?bool
    {
        return $this->result->isValid();
    }

    public function validate(?EntityInterface $entity = null): ValidatorAbstract
    {
        if ($entity) {
            $this->setSubjectName($entity);
            $this->processValidation($entity);
            $this->processExtensions($entity);
            $this->notifyObserver();
        }

        return $this;
    }

    private function processExtensions(EntityInterface $entity): ValidatorAbstract
    {
        foreach ($this->extensions as $validator) {
            /** @var ValidatorAbstract $validator */
            $validator->addObserver($this)->validate($entity);
        }

        return $this;
    }

    public function getExtensions(): ValidatorCollection
    {
        return $this->extensions;
    }

    public function setExtensions(ValidatorCollection $extensions): ValidatorAbstract
    {
        $this->extensions = $extensions;

        return $this;
    }

    public function addExtension(ValidatorAbstract $extension): ValidatorAbstract
    {
        $this->extensions->add($extension);
    }

    private function setSubjectName(EntityInterface $entity): void
    {
        $this->subjectName = substr(basename(\get_class($entity)), 0, -4);
    }

    final public function setSilentMode(bool $silentMode): ValidatorAbstract
    {
        self::$silentMode = $silentMode;

        return $this;
    }

    final public function isSilentMode(): bool
    {
        return self::silentMode;
    }

    public function addObserver(Observer $observer): ValidatorAbstract
    {
        $this->observers->add($observer);

        return $this;
    }

    public function notifyObservers(): ValidatorAbstract
    {
        foreach ($this->observers as $observer) {
            /** @var Observer $observer */
            $observer->observerUpdate($this->result);
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
