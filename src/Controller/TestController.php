<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 15/05/2018
 * Time: 09:39
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @Route("/home/")
     */
    public function test()
    {
        return $this->render('test/test.html.twig');
    }
}
