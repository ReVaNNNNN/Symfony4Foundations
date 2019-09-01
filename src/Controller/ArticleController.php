<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello here');
    }

    /**
     * @Route("/news")
     */
    public function show()
    {
        return new Response('Here are articles');
    }
}