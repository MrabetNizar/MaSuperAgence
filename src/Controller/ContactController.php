<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class ContactController extends AbstractController {
    /**
     * @Route("/contact", name="contact.index")
     * @return Response
     */
    public function index():Response{

        return $this->render('contact/index.html.twig',[
            'current_menu'=>'contact'
        ]);

    }

}