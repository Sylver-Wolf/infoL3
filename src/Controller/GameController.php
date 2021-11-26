<?php

namespace App\Controller;

use App\Form\Game4QType;
use App\Entity\Questions;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index(): Response
    {
        $q = $this->getDoctrine()->getRepository(Questions::class);
        $q = $q->findAll();

        $qTest = $this->getDoctrine()->getRepository(Questions::class);
        $qTest = $qTest->findOneBy(['type' => 1, 'difficulty' => 1]);

        $form = $this-> createForm(Game4QType::class);

        return $this->render('game/index.html.twig', [
            'GameController' => $form->createView(),
            'qTest' => $qTest
        ]);
    }
}
