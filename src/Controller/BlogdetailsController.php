<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogdetailsController extends AbstractController
{
    #[Route('/blog-details.html', name: 'app_blogdetails')]
    public function index(): Response
    {
        return $this->render('blogdetails/index.html.twig', [
            'controller_name' => 'BlogdetailsController',
        ]);
    }
}
