<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HiController extends Controller{
    /**
     * @Route("/hi/{name}")
     */
    public function HiAction($name='解'){
        return new RedirectResponse("http://www.baidu.com");
    }
    /**
     * @Route("/git")
     */
    public function gitAction(){
        return new RedirectResponse("http://www.github.com");

    }
}