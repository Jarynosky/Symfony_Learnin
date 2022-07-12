<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class SymfonyController extends AbstractController
{
    #[Route('/')]
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
           'title'=> 'Strona Glowna',
            'tracks'=> $tracks,
        ]);
    }
    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response {
        if($slug){
            $title = u(str_replace('-', ' ',$slug))->title(true);
        }else{
            $title = 'Dupa Dupa';
        }
        return new Response('browse browse browse: '.$title);
    }
}