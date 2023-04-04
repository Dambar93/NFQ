<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    #[Route('/edit/{id}', name: 'app_edit')]
    public function update(Article $article): Response
    {
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }
}