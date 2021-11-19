<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route("/", name="")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/admin/upload/test", name="upload_test")
     */
    public function temporaryUploadAction(Request $request){
        /** @var UploadedFile $uploadedFile */
        $uploadedFile = $request->files->get('image');
        $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
        dd($uploadedFile->move(
            $destination,
            $newFilename
        ));
    }

    /**
     * @Route("/{id}/show", name="article_show")
     * @param Article $article
     * @return Response
     */
    public function show(Article $article): Response
    {
        return $this->render("article/show.html.twig", [
            "article" => $article
        ]);
    }


    /**
     * @Route("/article/new", name="article_new")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article');

        }
        return $this->render('article/new.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("article/{id}/edit", name="article_edit")
     * @param Article $article
     * @param Request $request
     * @return Response
     */
    public function edit(Article $article, Request $request): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('article');
        }
        return $this->render("article/edit.html.twig", [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $article = $this->getDoctrine()->getRepository(Article::class);
        $article = $article->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $article,
        ]);

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    /**
     * @Route("/article/{id}/delete", name="article_delete")
     * @param Article $article
     * @return RedirectResponse
     */
    public function delete(Article $article): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute("article");
    }
}

