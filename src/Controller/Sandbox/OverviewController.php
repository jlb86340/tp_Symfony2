<?php

namespace App\Controller\Sandbox;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverviewController extends AbstractController
{
    #[Route('/sandbox/overview', name: 'app_sandbox_overview')]
    public function indexAction(): Response
    {
        return new Response('<body>Hello World!</body>');
    }
}
