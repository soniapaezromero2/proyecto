<?php

namespace App\Controller\Cliente;

use App\Entity\Cliente;
use App\Entity\Pedido;
use App\Form\ClienteType;
use App\Repository\ClienteRepository;
use App\Repository\PedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cliente")
 */
class ClienteController extends AbstractController
{
    private $pedidos;

    public function __construct(PedidoRepository $pedidos)
    {
        $this->pedidos = $pedidos;

    }

    /**
     * @Route("/", name="app_cliente_index", methods={"GET"})
     */
    public function index(ClienteRepository $clienteRepository): Response
    {
        $email=$this->getUser()->getUserIdentifier();
        $cliente= $clienteRepository->findOneBy(['email'=>$email]);

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('cliente/index.html.twig', [
                'clientes' => $clienteRepository->findAll(),
            ]);
        }else{

            return $this->render('cliente/show.html.twig', [
                'cliente' => $cliente,
            ]);

        }
    }

    /**
     * @Route("/new", name="app_cliente_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ClienteRepository $clienteRepository): Response
    {
        $cliente = new Cliente();
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clienteRepository->add($cliente, true);

            return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cliente/new.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cliente_show", methods={"GET"})
     */
    public function show(Cliente $cliente): Response
    {
        return $this->render('cliente/show.html.twig', [
            'cliente' => $cliente,
        ]);
    }

    /**
     * @Route("/{id}/pedido", name="app_pedidocliente_show", methods={"GET"})
     */
    public function showPedido(Cliente $cliente, $id, Request $request): Response

    {

        $pedid = $this->getDoctrine()->getRepository(Pedido::class)->findBy(['clientePedido' => $id]);
        $cantpedidos = count($pedid);

        if ($cantpedidos == 0) {

            $this->addFlash('warning', 'El cliente no tiene pedidos.');
            return $this->render('cliente/showpedidos.html.twig',[
                'cliente' => $cliente,
                'pedido' => $pedid,
            ]);

        } else {

            return $this->render('cliente/showpedidos.html.twig', [
                'cliente' => $cliente,
                'pedido' => $pedid,

            ]);
        }
    }
    /**
     * @Route("/{id}/edit", name="app_cliente_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Cliente $cliente, ClienteRepository $clienteRepository): Response
    {
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $clienteRepository->add($cliente, true);

            return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cliente_delete", methods={"POST"})
     */
    public function delete(Request $request, Cliente $cliente, ClienteRepository $clienteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cliente->getId(), $request->request->get('_token'))) {
            $clienteRepository->remove($cliente, true);
        }

        return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
