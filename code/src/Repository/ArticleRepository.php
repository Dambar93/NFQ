<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function findAll()
    {
        return $this->findBy(array(), array('updated_at' => 'DESC'));
    }

    public static function readTime($text)
    {
        $counter = 0;
        $words = explode(' ', $text);
        $filterWords = str_replace(array(',','.','?'), '', $words);
        $filteredWords = str_replace(array('-'), ' ', $filterWords);

        foreach($filteredWords as $word){
            if(strlen($word) > 3){
                $counter++;
            }
        }
        $time = str_replace(':', ' min. ', gmdate("i:s", $counter/200*60));
        
        return $time;
    }

    
}
