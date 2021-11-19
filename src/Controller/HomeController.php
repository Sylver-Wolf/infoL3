<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }/* 

    /**
     * @Route("/", name="home")
     * @param ArticleRepository $articleRepository
     * @return Reponse
     */
    
    /*public function home(ArticleRepository $articleRepository)
    {
        return $this->render('home/index.html.twig',[
            "articles" => $articleRepository->findBy(["published" => 1])
        ]);
    }
    */
}
