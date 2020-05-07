<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SonglookupController extends AbstractController
{
    /**
     * @Route("/songlookup", name="songlookup")
     */
    public function index()
    {
        return $this->render('songlookup/index.html.twig', [
            'controller_name' => 'SonglookupController',
        ]);
    }
}
