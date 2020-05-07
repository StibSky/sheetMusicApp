<?php

namespace App\Controller;

use App\Entity\APIClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class APICallController extends AbstractController
{
    /**
     * @Route("/call", name="a_p_i_call")
     */
    public function index()
    {
        $api = new APIClass();
        $response = $api->index();
        var_dump($response);
        die();

        return $this->render('api_call/index.html.twig', [
            'response' => $response,
        ]);
    }
}
