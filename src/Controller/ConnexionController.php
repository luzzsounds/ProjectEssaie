<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionController extends Controller
{
    /**
     * @Route("/connexion/")
     */
    public function connexion()
    {
        return $this->render('connexion/index.html.twig');
    }
}
