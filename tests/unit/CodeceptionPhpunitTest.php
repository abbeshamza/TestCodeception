<?php


class CodeceptionPhpunitTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $name= "testMe";
        //$this->assertTrue(true);
        $this->assertEquals("tesstMe",$name);

    }
}