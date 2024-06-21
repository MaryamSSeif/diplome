<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogmasonaryController extends AbstractController
{
    #[Route('/blog-masonary.html', name: 'app_blogmasonary')]
    public function index(): Response
    {
        return $this->render('blogmasonary/index.html.twig', [
            'controller_name' => 'BlogmasonaryController',
        ]);
    }
}
