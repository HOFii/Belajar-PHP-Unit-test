<?php

namespace hofi\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{

    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" .PHP_EOL;
    }


    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete(("TODO do Counter Again"));
        echo "TEST TEST" .PHP_EOL;
    }

    public function testCounter()
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this::assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    
    /**
     * @test
     */
    public function increment(){
        self::markTestSkipped("Masih error");

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    /**
     * @depends testFirst
     */
    public function testFirst(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    public function tearDown(): void
    {
        echo "tear Down" . PHP_EOL;
    }

    /**
     * @after
     */
    public function after(): void
    {
        echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWindows()
    {
        self::assertTrue(true, "Only in Windows");
    }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY Windows
     */
    public function testOnlyForMacAndPHP8()
    {
        self::assertTrue(true, "Only For Mac & PHP v.8");
    }
}
    
