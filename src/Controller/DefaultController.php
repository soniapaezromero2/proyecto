<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\RouterInterface;

class DefaultController extends AbstractController
{
    private $router;

    public function __construct( RouterInterface $router)
    {

        $this->router = $router;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(RouterInterface $router, Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('admin_dashboard');
        }else if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('app_panel');
        }
           $imagenurl="/public/images/fondo.jpg";
          return $this->render('default/home.html.twig', [
                 'label'=>'home',
                'controller_name' => 'DefaultController',
                 'imagen' =>$imagenurl,
            ]);

    }
    /**
     * @Route("/direccion", name="after_login_route_name")
     */
    public function afterloginRedirectAction(Request $request)
    {

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('admin_dashboard');
        }
        else if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('app_home');
        }
    }
}
