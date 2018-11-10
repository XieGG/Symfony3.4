<?php
// src/AppBundle/Controller/LuckController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller{
	/**
	 * @Route("/lucky/number")
	 */
	public function numberAction(){
		$number = random_int(0,100);
		return $this -> render('lucky/number.html.twig',array('number' => $number,));
	}
}
