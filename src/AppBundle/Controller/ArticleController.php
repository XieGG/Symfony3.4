<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *          defaults={"_format":"html"},
     *          requirements={
     *              "_locale":"en|fr",
     *              "_format":"html|rss",
     *              "year":"\d+"
     *          }
     *     )
     */
    public function showAction($_locale,$year,$slug){
        return new Response('<html><body><h1>你好</h1></body></html>');
    }
}