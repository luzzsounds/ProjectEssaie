<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Formulaire;
use App\Entity\Users;


class TotoController extends Controller
{
    /**
     * @Route("/toto/base.html.twig")
     */
    public function index()
    {
        $en         = $this->getDoctrine()=>getManager();
        $product    = new Product();
        $form       =$this->createForm(ProductType::class, $product);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $en->persist($form);
        }

        return $this->render('toto/base.html.twig');[
            'form' => $form->createView(),
        ]);
    }
}