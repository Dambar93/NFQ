<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class EditController extends AbstractController
{
    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit(EntityManagerInterface $entityManager, int $id, Request $request): Response
    {
        $article = $entityManager->getRepository(Article::class)->find($id);
        
        $form = $this-> createForm(ArticleFormType::class, $article);
        $form-> handleRequest($request); 
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $article->setTitle($form->get('title')->getData());
            $article->setText($form->get('text')->getData());
            $article->setImage($form->get('image')->getData());
            $article->setUpdatedAt(new \DateTime());
            $entityManager->flush();
            return $this-> redirectToRoute('home');
        };
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form -> createView()
        ]);

    }

}
