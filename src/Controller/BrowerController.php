<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrowerController extends AbstractController
{
    #[Route('/brower', name: 'app_brower')]
    public function index(): Response
    {
        return $this->render('brower/index.html.twig', [
            'controller_name' => 'BrowerController',
        ]);
    }
}
