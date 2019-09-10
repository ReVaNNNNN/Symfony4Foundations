<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello here');
    }

    /**
     * @Route("/show")
     */
    public function show()
    {
        return $this->render('homepage.html.twig', [
            'title' => 'Example title'
        ]);
    }
}
