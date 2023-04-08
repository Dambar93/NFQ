<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        $array= array();
        $articles = $articleRepository->findAll();

        foreach($articles as $article) {
            $time = $articleRepository->readTime($article->getText());
            array_push($array, $time);
        }
        return $this->render('pages/index.html.twig', [
            'articles' => $articles,
            'readTime' => $array
        ]);
    }
}
