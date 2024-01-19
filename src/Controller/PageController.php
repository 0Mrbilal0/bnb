<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * A function that serves as the entry point for the 'paris' route.
     *
     * @return Response the HTTP response object
     */
    #[Route('/', name: 'paris')]
    public function index(): Response
    {
        return $this->render('page/city.html.twig', [

        ]);
    }

    /**
     * Renders the confirmation email template.
     *
     * @return Response
     */
    #[Route('/email', name: 'email')]
    public function email(): Response
    {
        return $this->render('registration/confirmation_email.html.twig', [
            'signedUrl' => 'https://example.com/signed-url',
        ]);
    }
}