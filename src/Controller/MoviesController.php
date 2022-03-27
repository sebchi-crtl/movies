<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies_app')]
    public function index(): Response
    {

        $movies = ["Power","Peaky Blinders","Troy","Spatacus","Loki","Black ups"];
        return $this->render('movies/index.html.twig', 
        array(
            'movies' => $movies,
            'controller_name' => 'MoviesController'
        ));
    }
    
}
