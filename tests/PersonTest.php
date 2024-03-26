<?php

namespace hofi\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {

    }


    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Eko");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Elaina, my name is Gusti", $this->person->sayHello("Elaina"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good Bye Elaina") .PHP_EOL;
        $this->person->sayGoodBye("Elaina");
    }
}

