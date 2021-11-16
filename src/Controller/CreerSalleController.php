<?php

namespace App\Controller;

use App\Entity\ThemeQuestion;
use App\Entity\Salle;
use App\Entity\DifficulteQuestion;
use App\Form\CreerSalle;
use App\Form\CreerSalleType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class SalleController
 * @package App\Controller
 * @Route("/", name="")
 */
class CreerSalleController extends AbstractController
{
    /**
     * @Route("/creer_salle", name="creer_salle")
     */
    /*public function index(): Response
    {

        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $difficulte = $this->getDoctrine()->getRepository(DifficulteQuestion::class);
        $difficulte = $difficulte->findAll();
        $theme = $this->getDoctrine()->getRepository(ThemeQuestion::class);
        $theme = $theme->findAll();
        return $this->render('creer_salle/index.html.twig', [
            'difficultes' => $difficulte,
            'themes' => $theme,
        ]);
        
        return $this->render('creer_salle/index.html.twig', [
            'controller_name' => 'CreerSalleController',
        ]);
    }*/


    

    /**
     * @Route("/creer_salle/new", name="creer_salle_new")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $salle = new Salle();
        $form = $this->createForm(CreerSalleType::class, $salle);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($salle);
            $em->flush();

            return $this->redirectToRoute('salle');

        }
        return $this->render('creer_salle/new.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/salle", name="salle")
     */
    public function index(): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $salle = $this->getDoctrine()->getRepository(Salle::class);
        $salle = $salle->findAll();

        return $this->render('salle/index.html.twig', [
            'salles' => $salle,
        ]);

        return $this->render('salle/index.html.twig', [
            'controller_name' => 'CreerSallesController',
        ]);
    }
}
