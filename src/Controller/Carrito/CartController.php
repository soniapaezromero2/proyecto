<?php

namespace App\Controller\Carrito;

use App\Entity\Pedido;
use App\Factory\OrderFactory;
use App\Form\CartType;
use App\Manager\CartManager;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class CartController
 * @package App\Controller
 * @IsGranted("IS_AUTHENTICATED")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(CartManager $cartManager,Request $request, OrderFactory $orderFactory): Response
    {
            $cart = $cartManager->getCurrentCart();
            $form = $this->createForm(CartType::class, $cart);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $cart->setUpdatedAt(new \DateTime());
                $cartManager->save($cart);
                return $this->redirectToRoute('cart');
            }

            return $this->render('cart/index.html.twig', [
                'cart' => $cart,
                'form' => $form->createView()
            ]);



    }

}
