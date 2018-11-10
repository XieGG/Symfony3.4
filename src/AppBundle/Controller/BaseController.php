<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller{
    /**
     * @Route("/base")
     */
    public function baseAction(){
        return $this->render('base.html.twig');
    }
}
