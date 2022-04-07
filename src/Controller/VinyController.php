<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinyController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('homepage');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if($slug) {
            $title = 'Genul: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'Toate genurile muzicale';
        }

        return new Response($title);
    }
}