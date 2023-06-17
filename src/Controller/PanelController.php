<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Repository\ClienteRepository;
use App\Repository\PedidoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{
    private UserRepository $userRepository;
    private ClienteRepository $clienteRepository;
    private PedidoRepository $pedidoRepository;
    public function __construct(UserRepository $userRepository,ClienteRepository $clienteRepository,PedidoRepository $pedidos)
    {
        $this->userRepository = $userRepository;
        $this->clienteRepository = $clienteRepository;
    }

    /**
     * @Route("/panel", name="app_panel")
     */
    public function index(): Response
    {
        $email=$this->getUser()->getUserIdentifier();
        $entityManager = $this->getDoctrine()->getManager();
        $user=  $entityManager->getRepository(User::class)->findBy(['email' => $email]);
        $cliente= $entityManager->getRepository(Cliente::class)->findOneBy(['email' => $email]);;
        $direccion=$cliente->getDireccionEnvio();
        $phone=$cliente->getTlfContacto();
        if(is_null($direccion)) {
            return $this->redirectToRoute('app_cliente_edit', array('id' => $cliente->getId()));
        }elseif (is_null($phone)){
            return $this->redirectToRoute('app_cliente_edit', array('id' => $cliente->getId()));
        }else{
            return $this->redirectToRoute('app_profile');
        }
    }
}
