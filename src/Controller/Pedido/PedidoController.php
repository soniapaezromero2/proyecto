<?php

namespace App\Controller\Pedido;

use App\Entity\Cliente;
use App\Entity\Pedido;
use App\Entity\Producto;
use App\Factory\OrderFactory;
use App\Form\PedidoType;
use App\Form\PedidoTypeAdmin;
use App\Form\ProductoType;
use App\Repository\ClienteRepository;
use App\Repository\EstadoRepository;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use App\Repository\PedidoRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/pedido")
 */
class PedidoController extends AbstractController
{
    /**
     * @Route("/", name="app_pedido_index", methods={"GET"})
     */
    public function index(PedidoRepository $pedidoRepository): Response
    {
        $email=$this->getUser()->getUserIdentifier();
        $cliente= $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['email' => $email]);
        $id=$cliente->getId();
        $pedid = $this->getDoctrine()->getRepository(Pedido::class)->findBy(['clientePedido' => $id]);
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('pedido/index.html.twig', [
                'pedidos' => $pedidoRepository->findAll(),
            ]);
        }else{
            return $this->render('cliente/showpedidos.html.twig', [
                'cliente' => $cliente,
                'pedido' => $pedid,

            ]);

        }
    }

    /**
     * @Route("/new", name="app_pedido_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PedidoRepository $pedidoRepository,EstadoRepository $estadoRepository,OrderRepository $orderRepository,OrderItemRepository $orderItemRepository, ClienteRepository $clienteRepository): Response
    {
        $sesion=$request->getSession();
        $cart=$sesion->get('cart_id');
        $order=$orderRepository->findOneBy(['id'=>$cart]);
        $pedido=$pedidoRepository->findOneBy(['order'=>$order]);
        if(is_null($pedido)) {

            $pedido = new Pedido();
            $form = $this->createFormBuilder($pedido)
                ->add('add', SubmitType::class, [
                    'label' => 'Confirmar pedido'])
                ->getForm();

            $ref = rand(00001, 99999);
            $refs = $this->getDoctrine()->getRepository(Pedido::class)->findBy(['referencia' => $ref]);
            $refexist = count($refs);
            if ($refexist == 0) {
                $pedido->setReferencia($ref);
            } else {
                $ref = rand(00001, 99999);
            }

            $pedido->setOrder($order);
            $pedidoOrden = $pedido->getOrder();
            $items = $orderItemRepository->findBy(['orderRef' => $pedidoOrden]);
            $total = $pedidoOrden->getTotal();
            $pedido->setTotal($total);
            $totalPedido = $pedido->getTotal();
            foreach ($items as $item) {
                $product = $item->getProduct();
                $cant = $item->getQuantity();
                $product->setCantidadProducto($cant);
                $pedido->addProducto($product);

            };
            $estado = $estadoRepository->findOneBy(['estado' => 'Enviado']);
            $pedido->setCreatedAt(new \DateTime('now'));
            $email = $this->getUser()->getUserIdentifier();
            $cliente = $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['email' => $email]);
            $productos = $pedido->getProductos();
            $pedido->setClientePedido($cliente);
            $clientepedido = $pedido->getClientePedido();
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $productos = $pedido->getProductos();
                $pedido->setEstado($estado);
                $id=$pedido->getId();
                $pedidoRepository->add($pedido, true);
                $request->getSession()->clear();
                return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('pedido/new.html.twig', [
                'pedido' => $pedido,
                'items' => $items,
                'order' => $order,
                'referencia' => $pedido->getReferencia(),
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('app_pedido_edit', array('id' => $pedido->getId()));

        }
    }

    /**
     * @Route("/{id}", name="app_pedido_show", methods={"GET"})
     * @param Pedido $pedido
     * @param $id
     * @param ClienteRepository $clienteRepository
     * @param $orderItemRepository
     * @return Response
     */
    public function show(Pedido $pedido, $id, ClienteRepository $clienteRepository,OrderItemRepository $orderItemRepository): Response
    {
        $cliente=$pedido->getClientePedido()->getId();
        $productos=$pedido->getProductos();
        $order =$pedido->getOrder();
        $items=$orderItemRepository->findBy(['orderRef'=>$order]);
        foreach ($items as $item) {
            $product = $item->getProduct();
            $cant = $item->getQuantity();
            $product->setCantidadProducto($cant);
        }


        $cliente=$clienteRepository->findOneBy(['id' => $cliente]);
        return $this->render('pedido/show.html.twig', [
            'pedido' => $pedido,
             'productos'=>$productos,
            'cliente'=>$cliente,

        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_pedido_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Pedido $pedido, PedidoRepository $pedidoRepository, ClienteRepository $clienteRepository, EstadoRepository $estadoRepository, OrderRepository $orderRepository,OrderItemRepository $orderItemRepository,OrderFactory $orderFactory): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            $form = $this->createForm(PedidoTypeAdmin::class, $pedido);
            $form->handleRequest($request);
        }else{
            $form = $this->createFormBuilder( $pedido)
                ->add('add', SubmitType::class, [
                    'label' => 'Actualizar pedido pedido'])

                ->getForm();
            $form->handleRequest($request);

        }
        $sesion=$request->getSession();

        $pedido->setUpdatedAt(new \DateTime('now'));
        $idOrd=$pedido->getOrder();
        $order=$orderRepository->findOneBy(['id'=>$idOrd]);
        $ordId=$order->getId();
        $sesion->set('cart_id',$order);
       // dd($sesion);
        $items=$orderItemRepository->findBy(['orderRef'=>$order]);
        $id=$pedido->getClientePedido()->getId();
        $cliente=$clienteRepository->findOneBy(['id' => $id]);
        $estado=$pedido->getEstado();
        $enviadoCliente= $estadoRepository->findOneBy(['estado'=>'Enviado al cliente']);
        $envClt=$enviadoCliente->getEstado();
        $recibidoCliente= $estadoRepository->findOneBy(['estado'=>'Recibido por el cliente']);
        $recClt=$recibidoCliente->getEstado();
        $productos=$pedido->getProductos();
        $total=$order->getTotal();
        $pedido->setTotal($total);
        foreach ($items as $item) {
            $product = $item->getProduct();
            $cant = $item->getQuantity();
            $product->setCantidadProducto($cant);
            $pedido->addItem($item);
            $pedido->addProducto($product);
        };

        if(strcasecmp($estado, $envClt) == 0){
            $this->addFlash('warning', 'El pedido ya ha sido enviado.');
            return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
        }else{
            if(strcasecmp($estado, $recClt) == 0){
                $this->addFlash('warning', 'Usted ya ha recibido este pedido.');
                return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
            }else {
                if ($form->isSubmitted() && $form->isValid()) {
                   // $dat=$form->getData();
                    $orderRepository->add($order,true);
                    $pedidoRepository->add($pedido, true);
                    $request->getSession()->clear();
                    return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
                }
            }
        }

        return $this->renderForm('pedido/edit.html.twig', [
            'pedido' => $pedido,
            'cliente' => $cliente,
            'items'=>$items,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_pedido_delete", methods={"POST"})
     */
    public function delete(Request $request, Pedido $pedido, PedidoRepository $pedidoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pedido->getId(), $request->request->get('_token'))) {
            $pedidoRepository->remove($pedido, true);
        }

        return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
    }
}
