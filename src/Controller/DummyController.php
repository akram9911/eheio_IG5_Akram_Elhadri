<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy/{name}', name: 'app_dummy')]
    public function index(string $name): Response
    {
        return $this->render('dummy/index.html.twig', [
            'name' => 'DummyController',
        ]);
    }



    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        $text = "Hello  this is home !";
        $tabYear = [2020,2021,2022];
        return $this->render('home/index.html.twig', [
            "text" => $text,
            "years" => $tabYear
        ]);
    }
}
