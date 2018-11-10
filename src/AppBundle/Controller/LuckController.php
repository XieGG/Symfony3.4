<?php
namespace AppBundle\Controller; // PHP命名空间来命名整个控制器

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckController extends Controller{
    /**
     * @Route("/luck/number/{max}")
     */
    public function LuckAction($max){
        $number = random_int(0,$max);
        $url = $this->generateUrl('blog_show', array('slug' => 'slug-value'));
        return new Response(
            '<html><body>Lucky number:'.$number.'</body></html>'
        );
    }
}