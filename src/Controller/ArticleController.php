<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return new Response('Hello here');
    }

    /**
     * @Route("/homepage, name="app_homepage_html")
     */
    public function show()
    {
        return $this->render('homepage.html.twig', [
            'title' => 'Some title'
        ]);
    }
}
