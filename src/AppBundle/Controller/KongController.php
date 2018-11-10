<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KongController extends Controller{
    /**
     * @Route("/kong/number/{max}")
     */
    public function numberAction($max){
        $number = random_int(0,$max);

        return new Response(
            '<html><body>Lucky number:'.$max.'</body>'
        );
    }
}