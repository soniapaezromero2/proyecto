<?php

namespace App\Controller\Profile;

use App\Entity\Cliente;
use App\Repository\ClienteRepository;
use App\Repository\PedidoRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    private UserRepository $userRepository;
    private  ClienteRepository $clienteRepository;
    public function __construct(UserRepository $userRepository, ClienteRepository $clienteRepository)
    {
        $this->userRepository = $userRepository;
        $this->clienteRepository = $clienteRepository;

    }
    /**
     * @Route("/profile", name="app_profile", methods={"GET"})
     */
    public function index(Request $request,EntityManagerInterface $entityManager, PedidoRepository $pedidoRepository): Response
    {
        $email=$this->getUser()->getUserIdentifier();

        $cliente= $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['email' => $email]);
        $pedidos=$pedidoRepository->findBy(['clientePedido'=>$cliente]);
        $totalPedidos=count($pedidos);
        return $this->render('profile/index.html.twig', [
            'cliente' =>$cliente,
            'pedidos'=>$totalPedidos,
            'controller_name' => 'ProfileController',
        ]);
    }
}
