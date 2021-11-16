<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="create_article")
     */
    public function createArticle(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createArticle(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $article = new Article();
        $article->setPublished(true);
        $article->setTitle('Macron démission...');
        $article->setDescription('Macron doit démissioner car il s agit d un président de me...');
        $article->setImage('https://file1.closermag.fr/var/closermag/storage/images/media/images-des-contenus/article/170514-le-selfie/le-selfie-d-emmanuel-macron-detourne/5675916-1-fre-FR/Le-selfie-d-Emmanuel-Macron-detourne.png?alias=exact1024x768_l&size=x100&format=webp');
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($article);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new article with id '.$article->getId());
    }
}

