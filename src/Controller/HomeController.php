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
        
    }
    /**
     * @Route("/liste_salles", name="liste_salles")
     */
    public function liste_salles(): Response
    {
        return $this->render('liste_salles/index.html.twig');
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function blog(): Response
    {
        return $this->render('blog/index.html.twig');
    }
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        return $this->render('profil/index.html.twig');
    }
}
