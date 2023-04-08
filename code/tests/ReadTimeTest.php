<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Repository\ArticleRepository;

class ReadTimeTest extends TestCase
{
    public function testTimeCalculation(): void
    {
        
        $this->assertEquals('00 min. 01', ArticleRepository::readTime('Damn daniel asdas asdas'));
        $this->assertEquals('01 min. 00', ArticleRepository::readTime('
            Artificial intelligence, or AI, has become one of the most
            transformative technologies of our time. It is the development
            of computer systems that can perform tasks that normally require 
            human intelligence, such as learning, reasoning, problem-solving,
            and language processing. AI is being used across a wide range of industries,
            including healthcare, finance, transportation, and manufacturing, to improve efficiency,
            productivity, and accuracy. One of the most significant areas of AI development is machine learning,
            which involves feeding large amounts of data into an algorithm so that it can learn from it and
            make predictions or decisions based on that data.
            While AI has the potential to revolutionize many aspects of
            our lives, it also raises ethical and societal concerns. For 
            example, there are worries that AI could lead to job displacement,
            as machines become better at performing certain tasks than humans.
            There are also concerns about bias and discrimination, as AI systems
            can perpetuate and even amplify existing social biases if not designed and
            implemented correctly. Privacy is another concern, as the collection and processing
            of large amounts of data by AI systems raises questions about
            data ownership, consent, and security.
            Despite these concerns, the potential benefits of AI are vast,
            and many experts believe that the technology can be used to address 
            some of the worlds
            most pressing challenges, from climate change to healthcare access. 
            As AI continues to develop and mature, it will be essential 
            for policymakers, businesses, and society as a whole to ensure 
            that it is used in a responsible and ethical manner, with a focus 
            on promoting the common good.
            Despite these concerns, the potential benefits of AI are vast,
            and many experts believe that the technology can be used to address
            some of the worlds most pressing challenges, from climate change
            to healthcare access. Despite these concerns, the potential
            benefits of AI are vast, and many experts believe that
            the technology afdsadsf afasfasf fsdd
        '));   }
}
