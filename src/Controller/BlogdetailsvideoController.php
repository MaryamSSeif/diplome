<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogdetailsvideoController extends AbstractController
{
    #[Route('/blogdetailsvideo', name: 'app_blogdetailsvideo')]
    public function index(): Response
    {
        return $this->render('blogdetailsvideo/index.html.twig', [
            'controller_name' => 'BlogdetailsvideoController',
        ]);
    }
}
