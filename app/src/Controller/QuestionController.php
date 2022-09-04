<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('hello');
    }

    /**
     * @Route("/question/{slug}")
     */
    public function show($slug): Response
    {
        return new Response(sprintf('Hello, %s!!!', $slug));
    }
}
