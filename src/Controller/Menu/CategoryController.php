<?php

namespace App\Controller\Menu;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function ShowMenu(CategoryRepository $category): Response
    {
        return $this->render('_partials/_header.html.twig', [
            'category' => $category->findBy(['parent' => null])
        ]);
    }
}
