<?php
namespace Budkovsky\Aid\Tests\TestCase\Validator;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Validator\Entity\ValidationResult;
use Budkovsky\Aid\Helper\EntityTest;
use Budkovsky\Aid\Collection\StringCollection;
use Budkovsky\Aid\Validator\Collection\ValidationResultCollection;
use Budkovsky\Aid\Helper\RandomString;

class ValidationResultTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(ValidationResult::class, new ValidationResult('name'));
    }

    public function testCanBeCreatedViaStaticFactory(): void
    {
        $this->assertInstanceOf(ValidationResult::class, ValidationResult::create('somename'));
    }

    public function testHasNoPublicProperies(): void
    {
        $reflector = new \ReflectionClass(ValidationResult::class);
        $this->assertTrue(EntityTest::hasNoPublicProperties($reflector));
    }

    public function testHasValidGetters(): void
    {
        $reflector = new \ReflectionClass(ValidationResult::class);
        $this->assertTrue(EntityTest::hasValidSetters($reflector));
    }

    public function testSomeGettersAreNullable(): void
    {
        $entity = new ValidationResult('name');
        $this->assertNull($entity->isValid());
        $this->assertNull($entity->getLastMessage());
    }

    public function testNameGetterReturnsString(): void
    {
        $entity = new ValidationResult('name');
        $this->assertIsString($entity->getName());
    }

    public function testMessageGetterReturnsCollection(): void
    {
        $entity = new ValidationResult('name');
        $this->assertInstanceOf(StringCollection::class, $entity->getMessages());
    }

    public function testChildrenGetterReturnsCollection(): void
    {
        $entity = new ValidationResult('name');
        $this->assertInstanceOf(ValidationResultCollection::class, $entity->getChildren());
    }

    public function testCanAddMessage(): void
    {
        $entity = new ValidationResult('name');

        for ($i = 10; $i > 0; $i--) {
            $message = RandomString::get();
            $entity->addMessage($message);
            $this->assertTrue(\in_array($message, $entity->getMessages()->toArray()));
        }
    }

    public function testCanAddChild(): void
    {
        $entity = new ValidationResult('name');

        for ($i = 10; $i > 0; $i--) {
            $childName = RandomString::get();
            $entity->addChild(ValidationResult::create($childName));
            $childExists = false;
            foreach ($entity->getChildren() as $child) {
                /** @var ValidationResult $child */
                if ($child->getName() == $childName) {
                    $childExists = true;
                    break;
                }
            }
            $this->assertTrue($childExists);
        }
    }
}
