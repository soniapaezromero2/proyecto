<?php

namespace App\Controller\Producto;

use  App\Form\AddToCartType;
use App\Entity\Categoria;
use App\Entity\Producto;
use App\Form\ProductoType;
use App\Manager\CartManager;
use App\Repository\CategoriaRepository;
use App\Repository\ProductoRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


/**
 * @Route("/producto")
 */
class ProductoController extends AbstractController
{
    /**
     * @Route("/", name="app_producto_index", methods={"GET"})
     */
    public function index(ProductoRepository $productoRepository, CategoriaRepository $categoriaRepository): Response
    {
        return $this->render('producto/index.html.twig', [
            'productos' => $productoRepository->findAll(),
            'categorias'=>$categoriaRepository->findAll(),
        ]);
    }

    /**
     *
     * @Route("/new", name="app_producto_new", methods={"GET", "POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request, ProductoRepository $productoRepository,SluggerInterface $slugger): Response
    {

        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('No access for you!');
        }
        $producto = new Producto();
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imagen=$form->get('imageFile')->getData();

            if ($imagen) {
                $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imagen->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imagen->move(
                        $this->getParameter('productImages_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $producto->setImageFile($newFilename);
                $producto->setImageName($newFilename);
            }

            $productoRepository->add($producto, true);


            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producto/new.html.twig', [
            'producto' => $producto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_producto_show", methods={"GET"})
     */
    public function show(Producto $producto): Response
    {
        return $this->render('producto/show.html.twig', [
            'producto' => $producto,

        ]);
    }
    /**
     * @Route("/detail/{id}", name="app_producto_detail")
     */
    public function detail(Producto $producto,Request $request, CartManager $cartManager)
    {
        $form = $this->createForm(AddToCartType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $item->setProduct($producto);
            $cart = $cartManager->getCurrentCart();
            $ref=$cart->getPedido();
            $item->setPedido($ref);

            $cart
                ->addItem($item)
                ->setUpdatedAt(new \DateTime());

            $cartManager->save($cart);

            return $this->redirectToRoute('app_producto_detail', ['id' => $producto->getId()]);
        }

        return $this->render('producto/detail.html.twig', [
            'product' => $producto,
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/categoria/{id}", name="app_producto_categoria", methods={"GET"})
     */
    public function showCategorias(Request $request,ProductoRepository $productoRepository,CategoriaRepository $categoriaRepository,Categoria $categoria): Response
    {
        $categoria=$categoriaRepository->findOneBy(['id'=>$categoria->getId()]);
        $productos=$productoRepository->findBy(['categorias'=>$categoria]);
        $name=$categoria->getName();
        return $this->render('producto/showcategorias.html.twig', [
            'productos' => $productos,
            'name'=> $name,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_producto_edit", methods={"GET", "POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, Producto $producto, ProductoRepository $productoRepository,SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);
        $date=$request->getSession();


        if ($form->isSubmitted() && $form->isValid()) {
            $imagen=$form->get('imageFile')->getData();


            if ($imagen) {
                $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imagen->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imagen->move(
                        $this->getParameter('productImages_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $producto->setUpdatedAt(new \DateTime('now'));
                $producto->setImageFile($newFilename);
                $producto->setImageName($newFilename);
            }

            $productoRepository->add($producto, true);

            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producto/edit.html.twig', [
            'producto' => $producto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_producto_delete", methods={"POST"})
     */
    public function delete(Request $request, Producto $producto, ProductoRepository $productoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$producto->getId(), $request->request->get('_token'))) {
            $productoRepository->remove($producto, true);
        }

        return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
    }
}
