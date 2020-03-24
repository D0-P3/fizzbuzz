<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\FizzBuzz\FizzBuzz;


class FizzBuzzTest extends TestCase {


    public function dataProvider () : array {

        return [
            'expect 1' => [ 1, 1],
            'expect 2' => [ 2, 2],
            'expect Fizz' => [ 3, 'Fizz'],
            'expect Buzz' => [ 5, 'Buzz'],
            'expect Fizz' => [ 9, 'Fizz'],
            'expect Buzz' => [ 10, 'Buzz'],
            'expect FizzBuzz' => [ 15, 'FizzBuzz'],
            'expect 22' => [ 22, 22],
        ];
    }


    /**
     * @dataProvider dataProvider
     */
    public function testFizzBuzz (int $number, string $expected) {

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->fizzBuzz($number);
        $this->assertEquals($result, $expected);    
    }

}
