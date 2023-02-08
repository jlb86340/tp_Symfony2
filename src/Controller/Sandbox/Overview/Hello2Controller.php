<?php

namespace App\Controller\Sandbox\Overview;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Hello2Controller extends AbstractController
{
    #[Route('/sandbox/overview/hello2', name: 'sandbox_overview_hello2')]
    public function hello2Action(): Response
    {
        return new Response('<body>Hello World number 2!</body>');
    }
}
