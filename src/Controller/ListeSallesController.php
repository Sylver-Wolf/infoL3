<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeSallesController extends AbstractController
{
    /**
     * @Route("/listesalles", name="liste_salles")
     */
    public function index(): Response
    {
        return $this->render('liste_salles/index.html.twig', [
            'controller_name' => 'ListeSallesController',
        ]);
    }
}
