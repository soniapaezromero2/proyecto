<?php

namespace App\Storage;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartSessionStorage
{
    /**
     * The request stack.
     *
     * @var RequestStack
     */
    private $requestStack;

    /**
     * The cart repository.
     *
     * @var OrderRepository
     */
    private $cartRepository;

    /**
     * @var string
     */
    const CART_KEY_NAME = 'cart_id';

    /**
     * CartSessionStorage constructor.
     *
     * @param RequestStack $requestStack
     * @param OrderRepository $cartRepository
     */
    public function __construct(RequestStack $requestStack, OrderRepository $cartRepository)
    {
        $this->requestStack = $requestStack;
        $this->cartRepository = $cartRepository;
    }

    /**
     * Gets the cart in session.
     *
     * @return Order|null
     */
    public function getCart(): ?Order
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'status' => Order::STATUS_CART
        ]);
    }

    /**
     * Sets the cart in session.
     *
     * @param Order $cart
     */
    public function setCart(Order $cart): void
    {
        $id=$cart->getId();
        $this->getSession()->set(self::CART_KEY_NAME,$id);
    }

    /**
     * Returns the cart id.
     *
     * @return int|null
     */
    private function getCartId(): ?int
    {
        if(is_null(self::CART_KEY_NAME)){
            return $this->getSession()->get(self::CART_KEY_NAME);
        }else{
          //  dd( $this->getSession()->get(self::CART_KEY_NAME));
            return $this->getSession()->get(self::CART_KEY_NAME);
        }

    }

    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
    private function clearSession(): SessionInterface
    {
        return $this->requestStack->getSession()->remove(self::CART_KEY_NAME);
    }
}