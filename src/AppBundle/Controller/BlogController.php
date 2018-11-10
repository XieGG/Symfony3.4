<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller{
    /**
     * @Route ("/blog/{page}",name="blog_list",requirements={"page"="\d+"})
     */
    public function listAction($page=1){
        //...
        return new Response('<html><body></center><h1>你好</h1></body></html>');
    }
    /**
     * @Route ("/blog/{slug}",name="blog_show")
     */
    public function showAction($slug){
        //...
        return new Response('<html><body><h1>真好</h1></body></html>');
    }
    /**
     * @Route("/xie/{page}")
     */
    public function xieAction($page){
        return new Response('<html><body><h1>URL为Xie/'.$page.'</h1></body></html>');
    }
}
