<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController{

  /**
   * @Route("/", name="homepage")
   */
  public function home(){
    return  $this->render('home.html.twig',['title'=>'bonjour a tous bande d\'enfoirer']
);
  }
}