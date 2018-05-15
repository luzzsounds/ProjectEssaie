<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Test2Controller extends Controller
{
    /**
     * @Route("/test2", name="test2")
     */
    public function index()
    {
        return $this->render('test2/index.html.twig', [
            'controller_name' => 'Test2Controller',
        ]);
    }
}
