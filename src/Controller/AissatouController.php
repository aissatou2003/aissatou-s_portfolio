<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AissatouController extends AbstractController
{
    /**
     * @Route("/aissatou", name="aissatou")
     */
    public function index(): Response
    {
        return $this->render('aissatou/index.html.twig', [
            'controller_name' => 'AissatouController',
        ]);
    }
      /**
     * @Route("/portfolio", name="e-portfolio")
     */
    public function portfolio()
    {
        return $this->render('aissatou/portfolio.html.twig');
    }
      /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('aissatou/contact.html.twig');
    }
      /**
     * @Route("/personnel", name="A propos")
     */
    public function personnel()
    {
        return $this->render('aissatou/personnel.html.twig');
    }
}
