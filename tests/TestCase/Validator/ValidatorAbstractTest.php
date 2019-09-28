<?php
namespace Budkovsky\Aid\Tests\TestCase\Validator;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Validator\Exception\ValidationException;

class ValidatorAbstractTest extends TestCase
{
    private $exampleData = [
        'proper-string' => 'qwejhfssfgd',
        'next-proper-string' => 'zdfcQWEEASD',
        'bad-string' => '123weorij23o',
        'another-bad-string' => 'asdasd QWEQWE',
        'bag1' => [
            'bag1-proper-string' => 'zxczxczxc',
            'bag1-bad-string' => '123123123'
        ]
    ];


    public function testSilentMode(): void
    {
        $validator = new ExampleAlphaValidator('root');
        $validator
            ->setSilentMode(true)
            ->validate($this->exampleData)
        ;

        $this->assertFalse($validator->isValid());

    }

    public function testMessagesInSilentMode(): void
    {
        $validator = new ExampleAlphaValidator('root');
        $validator
            ->setSilentMode(true)
            ->validate($this->exampleData)
        ;

        $this->assertEquals(
            '`bag1-bad-string` is not valid',
            $validator->getResult()->getLastMessage()
            );
        $this->assertEquals(
            '`bad-string` is not valid',
            $validator->getResult()->getMessages()->toArray()[0]
            );
        $this->assertEquals(
            '`another-bad-string` is not valid',
            $validator->getResult()->getMessages()->toArray()[1]
        );
        $this->assertEquals(
            '`bag1-bad-string` is not valid',
            $validator->getResult()->getChildren()->get('bag1')->getMessages()->toArray()[0]
        );
    }

    public function testExceptionMode(): void
    {
        $this->expectException(ValidationException::class);
        $validator = new ExampleAlphaValidator('root');
        $validator
            ->setSilentMode(false)
            ->validate($this->exampleData)
        ;
    }

    public function testValidationWithoutAnyErrors(): void
    {
        $data = $this->exampleData;
        unset($data['bad-string']);
        unset($data['another-bad-string']);
        unset($data['bag1']['bag1-bad-string']);

        $validator = new ExampleAlphaValidator('root');
        $validator->validate($data);

        $this->assertTrue($validator->isValid());
        $this->assertEmpty($validator->getResult()->getLastMessage());
        $this->assertEmpty($validator->getResult()->getMessages()->toArray());
    }

}
