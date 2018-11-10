<?php
namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class XieController extends Controller{
    /**
     * @Route("/xieweb")
     */
    public function xieAction(){
        return $this->render('@ScourgenWeb/xieweb.html.twig');
    }
}