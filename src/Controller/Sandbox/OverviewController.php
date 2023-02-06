<?php

namespace App\Controller\Sandbox;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class OverviewController extends AbstractController
{
    #[Route('/sandbox/overview', name: 'app_sandbox_overview')]
    public function indexAction(): Response
    {
//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/Sandbox/OverviewController.php',
//        ]);
        return new Response('Hello World!');
    }
}
