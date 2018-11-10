<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/page")
 */
class PageController extends Controller{
    /**
     * @Route("/index/{page}",requirements={"page"="\d+"})
     */
    public function indexAction($page=1){
        return new Response('<html><body></center><h1>你好'.$page.'</h1></body></html>');
    }
    /**
     * @Route("/index/name/{name}")
     */
    public function nameAction($name='解'){
        return new Response('<html><body><h1>你的名字是:'.$name.'</h1></body></html>');
    }
}
