<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test/controler")
 */
class TestControlerController extends AbstractController
{
    /**
     * @Route("/", name="test_controler_index", methods={"GET"})
     */
    public function index(TestRepository $testRepository): Response
    {
        return $this->render('test_controler/index.html.twig', [
            'tests' => $testRepository->findAll(),
        ]);
    }
    
    /**
     * @Route("/{id}/jsp", name="test_controler_jsp", methods={"GET","POST"})
     */
    public function jsp(Request $request, Test $test): Response
    {
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_controler_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('test_controler/jsp.html.twig', [
            'test' => $test,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/new", name="test_controler_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $test = new Test();
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($test);
            $entityManager->flush();

            return $this->redirectToRoute('test_controler_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('test_controler/new.html.twig', [
            'test' => $test,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="test_controler_show", methods={"GET"})
     */
    public function show(Test $test): Response
    {
        return $this->render('test_controler/show.html.twig', [
            'test' => $test,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="test_controler_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Test $test): Response
    {
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_controler_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('test_controler/edit.html.twig', [
            'test' => $test,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="test_controler_delete", methods={"POST"})
     */
    public function delete(Request $request, Test $test): Response
    {
        if ($this->isCsrfTokenValid('delete'.$test->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($test);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_controler_index', [], Response::HTTP_SEE_OTHER);
    }
}
