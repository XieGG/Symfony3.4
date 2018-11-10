<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller{
    /**
     * @Route("/",name="welcome")
     */
    public function weAction(){
        return $this->render('article/recent_list.html.twig');
    }
}