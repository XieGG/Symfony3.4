<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class Welcome2Controller extends Controller{
    /**
     * @Route("/article/{slug}",name="article_show")
     */
    public function we2Action($slug){
        return $this->render('article/rectent_list2.html.twig');
    }
}