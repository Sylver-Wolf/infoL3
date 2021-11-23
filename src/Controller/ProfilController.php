<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use App\Form\ProfileType;
use App\Form\ResetPasswordType;
use App\Form\plainPassword;


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
    /**
     * @Route("profil/{id}/resetPassword", name="resetPassword")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function resetPassword(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
    	$form = $this->createForm(ResetPasswordType::class, $user);
    	$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $plainPass = $request->request->get('reset_password')['plainPassword']['first'];
            $oldPassword = $request->request->get('reset_password')['oldPassword'];
            // dump($request->request);die();
            $encoded = $passwordEncoder->encodePassword($user, $oldPassword);
            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $plainPass);
                $user->setPassword($newEncodedPassword);
                
                $em->persist($user);
                $em->flush();
                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');
                return $this->redirectToRoute('profil');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }
    	
    	return $this->render('profil/resetPassword.html.twig', array(
    		'form' => $form->createView(),
    	));
    }

}
