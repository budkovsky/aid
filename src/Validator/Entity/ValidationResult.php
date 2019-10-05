<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Validator\Entity;

use Budkovsky\Aid\Collection\StringCollection;
use Budkovsky\Aid\Validator\Collection\ValidationResultCollection;
use Budkovsky\Aid\Abstraction\StaticFactoryInterface;

/**
 * ValidationResult entity
 */
class ValidationResult implements StaticFactoryInterface
{
    /** @var string */
    protected $name;

    /** @var bool */
    protected $valid;

    /** @var StringCollection */
    protected $messages;

    /** @var string */
    protected $lastMessage;

    /** @var ValidationResultCollection */
    protected $children;

    /**
     * ValidationResult entity constructor
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->messages = new StringCollection();
        $this->children = new ValidationResultCollection();
    }

    /**
     * ValidationResult entity static factory
     * @param string $name
     * @return ValidationResult
     */
    public static function create(?string $name = null): ?ValidationResult
    {
        return new static($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ValidationResult
    {
        $this->name = $name;

        return $this;
    }

    public function isValid(): ?bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): ValidationResult
    {
        $this->valid = $valid;

        return $this;
    }

    public function mergeValid(bool $valid): ValidationResult
    {
        $this->valid = $this->valid === null ? $valid : $this->valid && $valid;

        return $this;
    }

    public function getMessages(): StringCollection
    {
        return $this->messages;
    }

    public function setMessages(StringCollection $messages): ValidationResult
    {
        $this->messages = $messages;

        return $this;
    }

    public function addMessage(string $message): ValidationResult
    {
        $this->messages->add($message);

        return $this;
    }

    public function getLastMessage(): ?string
    {
        return $this->lastMessage;
    }

    public function setLastMessage(string $message): ValidationResult
    {
        $this->lastMessage = $message;

        return $this;
    }

    public function getChildren(): ValidationResultCollection
    {
        return $this->children;
    }

    public function setChildren(ValidationResultCollection $children): ValidationResult
    {
        $this->children = $children;

        return $this;
    }

    public function addChild(ValidationResult $child): ValidationResult
    {
        $this->children->add($child->getName(), $child);

        return $this;
    }
}
