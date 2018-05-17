<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TotoController extends Controller
{
    /**
     * @Route("/toto/base.html.twig")
     */
    public function index()
    {
        return $this->render('toto/base.html.twig');


    }
}