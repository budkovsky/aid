<?php
namespace Budkovsky\Aid\Tests\TestCase\Validator;

use Budkovsky\Aid\Validator\Abstraction\ValidatorAbstract;
use Budkovsky\Aid\Validator\Exception\ValidationException;

class ExampleAlphaValidator extends ValidatorAbstract
{
    public function validate(?array $data = null)
    {
        foreach ($data as $name => $value) {
            if (\is_string($value)) {
                $this->validateStringValue($name, $value);
            } elseif (\is_array($value)) {
                $this->validateArrayValue($name, $value);
            } else {
                throw new ValidationException('Unexpected validation error');
            }
        }
    }

    private function validateStringValue(string $name, string $value): ExampleAlphaValidator
    {
        if (\preg_match('/^[A-Za-z]+$/', $value) === 1) {
            $this->result->setValid(
                $this->result->isValid() === null ? true : $this->result->isValid() && true
            );
        } else {
            $message = "`$name` is not valid";
            if (!static::$silentMode) {
                throw new ValidationException($message);
            }
            $this->result->setValid(false);
            $this->result->getMessages()->add($message);
            $this->result->setLastMessage($message);
        }

        $this->notifyObservers();

        return $this;
    }

    private function validateArrayValue(string $name, array $value): ExampleAlphaValidator
    {
        $childValidator = new self($name);
        $childValidator
            ->addObserver($this)
            ->validate($value)
        ;

        return $this;
    }


}

