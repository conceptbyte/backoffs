<?php

use Backoffs\Generator;

class GeneratorTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_should_generate_a_exponential_backoff()
    {
        $backoff = new Generator();

        $number = $backoff->exponential(1);
        $this->assertEquals(3, $number);

        $number = $backoff->exponential(2);
        $this->assertEquals(8, $number);

        $number = $backoff->exponential(3);
        $this->assertEquals(21, $number);
    }

    /** @test */
    public function it_should_generate_a_linear_backoff()
    {
        $backoff = new Generator();

        $number = $backoff->linear(1);
        $this->assertEquals(2, $number);

        $number = $backoff->linear(2);
        $this->assertEquals(3, $number);

        $number = $backoff->linear(3);
        $this->assertEquals(4, $number);
    }

    /** @test */
    public function it_should_generate_logarithmic_backoff()
    {
        $backoff = new Generator();

        $number = $backoff->logarithmic(1);
        $this->assertEquals(0, $number);

        $number = $backoff->logarithmic(2);
        $this->assertEquals(1, $number);

        $number = $backoff->logarithmic(8);
        $this->assertEquals(3, $number);
    }
}