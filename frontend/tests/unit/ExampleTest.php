<?php


namespace frontend\tests\Unit;

use frontend\tests\UnitTester;

class ExampleTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function testAddition()
    {
        $this->assertEquals(2 + 2, 4);
    }
}
