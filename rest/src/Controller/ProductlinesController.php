<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController
{
    /**
     * @Route("/productlines", name="productlines")
     */
    public function index(): Response
    {
        return $this->render('productlines/index.html.twig', [
            'controller_name' => 'ProductlinesController',
        ]);
    }
}
