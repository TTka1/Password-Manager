<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{

    #[Route('/', name: 'homepage')]
    public function indexAction(): Response
    {
        return $this->render('homepage/index.html.twig', [
        ]);
    }

}