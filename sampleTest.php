<?php
require_once('./sample.php');
class SampleTest extends PHPUnit_Framework_TestCase
{
    public function testハローワールド()
    {
        $Sample = new sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }

    /**
     * @test
     */
    public function aaa()
    {
        $Sample = new sample();
        $this->assertEquals($Sample->helloWorld(), 'aaaaa');
    }
}
