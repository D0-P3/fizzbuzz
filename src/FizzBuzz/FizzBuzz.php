<?php
declare(strict_types=1);

namespace App\FizzBuzz;


class FizzBuzz {

    public function fizzBuzz(int $number): string
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        }
        else if ($number % 5 === 0) {
            return 'Buzz';
        }
        else if ($number % 3 === 0) {
            return 'Fizz';
        }
        else {
            return (string)$number;
        }        
    }

}
