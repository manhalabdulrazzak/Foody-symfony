<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }
    #[Route('/product/{id}', name: 'product_detail')]
    public function show(Product $product):Response
    {
        return $this->render('product/detail.html.twig', [
            'product' => $product,
        ]);
    }


}
