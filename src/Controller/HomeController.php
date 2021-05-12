<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Pizza;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'pizzas'=>$this->getDoctrine()->getRepository(Pizza::class)->findAll() // [{name:'',price:15},{name:'',price:15},{name:'',price:15}]
        ]);
    }
}
