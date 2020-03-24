<?php
declare(strict_types=1);

namespace App\Controller;

use App\FizzBuzz\FizzBuzz;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{

    /**
     * @Route("/fizzbuzz")
     */
    public function fizzbuzz()
    {
        
        $fizzBuzz = new FizzBuzz();
        $results = [];

        for ($i = 1; $i <= 100; $i++){
            array_push($results, $fizzBuzz->fizzBuzz($i));
        }

        return $this->render('fizzbuzz/fizzbuzz.html.twig', [
            'results' => $results,
        ]);

    }
    
}
