<?php

namespace tests\Unit;

use App\Fibo;
use PHPUnit\Framework\TestCase;

class FiboTest extends TestCase
{
    // This test is based on technical documentation
    /** @test */

    //  Given n = 2, the function should return 1
    public function value_of_2th_is_1()
    {
        $this->assertEquals(1, Fibo::digits_sequence(2));
    }
    /** @test */

    //  Given n = 6, the function should return 8
    public function value_of_6th_is_8()
    {
        $this->assertEquals(8, Fibo::digits_sequence(6));
    }
    /** @test */

    //  Given n = 10, the function should return 10
    public function value_of_10th_is_10()
    {
        $this->assertEquals(10, Fibo::digits_sequence(10));
    }
}