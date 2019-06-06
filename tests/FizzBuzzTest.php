<?php
namespace Test;


use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase {

    public function test_number_isnt_fizz_and_buzz(){

        $expected = 1;
        $number = new FizzBuzz();
        $actual = $number->generate(1);
        
        $this->assertEquals($expected, $actual);
    }
}