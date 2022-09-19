<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question/{slug}")
     */
    public function show($slug): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => 'Hello ' . $slug . '!!!'
        ]);
    }
}
