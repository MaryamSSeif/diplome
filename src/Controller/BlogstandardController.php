<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogstandardController extends AbstractController
{
    #[Route('/blog.html', name: 'app_blogstandard')]
    public function index(): Response
    {
        return $this->render('blogstandard/index.html.twig', [
            'controller_name' => 'BlogstandardController',
        ]);
    }
}
