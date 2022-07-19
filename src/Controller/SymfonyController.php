<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class SymfonyController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage() : Response {

        $tracks = [
            ['song' => 'Gdybys Kiedys','artist' => 'Paluch'],
            ['song' =>' 6 Zer', 'artist' =>  'Taco Hemingway'],
            ['song' => 'Marmur','artist' => 'Taco Hemingway'],
            ['song' =>' Ladni Smutni Ludzie', 'artist' =>  'Paluch'],
            ['song' => 'Cesarz','artist' => 'Keke'],
            ['song' =>' Kabriolety', 'artist' =>  'Taco Hemingway'],
            ['song' => 'Europa','artist' => 'Taco Hemingway'],
        ];

        return $this->render("symfony/homepage.html.twig",[
           'title'=> 'Utwory do przesłuchania!',
            'tracks'=> $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response {

        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) :null;

        return $this ->render('symfony/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}