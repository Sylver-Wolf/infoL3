<?php

namespace App\Controller;

use App\Entity\Article;
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

        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $article = $this->getDoctrine()->getRepository(Article::class);
        $article = $article->findBy( 
            array(), 
            array('id' => 'DESC'),
            3,
          ); 

        return $this->render('home/index.html.twig', [
            'articles' => $article,
        ]);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    
    /* 

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
