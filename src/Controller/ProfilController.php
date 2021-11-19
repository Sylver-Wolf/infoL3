<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProfilController
 * @package App\Controller
 * @Route("/", name="")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $user = $this->getDoctrine()->getRepository(User::class);
        $user = $user->findAll();

        return $this->render('profil/index.html.twig', [
            'profil' => $user,
        ]);
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil()
    {
        /** @var User $user */
           $user = $this->getUser();

        return $this->render('profil/index.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("profil/{id}/edit", name="profil_edit")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function edit(User $user, Request $request): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('profil');
        }
        return $this->render("profil/edit.html.twig", [
            "form" => $form->createView()
        ]);
    }


}
