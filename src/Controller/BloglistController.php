<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BloglistController extends AbstractController
{
    #[Route('/blog-list.html', name: 'app_bloglist')]
    public function index(): Response
    {
        return $this->render('bloglist/index.html.twig', [
            'controller_name' => 'BloglistController',
        ]);
    }
}
