<?php

namespace App\Controller\Consulta;

use App\Entity\Consulta;
use App\Form\ConsultaType;
use App\Form\ConsultaUsuariosType;
use App\Repository\ConsultaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/consulta")
 */
class ConsultaController extends AbstractController
{
    /**
     * @Route("/", name="app_consulta_index", methods={"GET"})
     */
    public function index(ConsultaRepository $consultaRepository): Response
    {
        return $this->render('consulta/index.html.twig', [
            'consultas' => $consultaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_consulta_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ConsultaRepository $consultaRepository): Response
    {


        $consultum = new Consulta();
        if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED')){
            $form = $this->createForm(ConsultaUsuariosType::class, $consultum);
            $form->handleRequest($request);
            $email=$this->getUser()->getUserIdentifier();
            $consultum->setEmail($email);
            //$consultum->setCreatedAt(new \DateTime('now'));
        }else{
            $form = $this->createForm(ConsultaType::class, $consultum);
            $form->handleRequest($request);
        }


        if ($form->isSubmitted() && $form->isValid()) {
            $consultaRepository->add($consultum, true);

            return $this->redirectToRoute('app_consulta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('consulta/new.html.twig', [
            'consultum' => $consultum,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_consulta_show", methods={"GET"})
     */
    public function show(Consulta $consultum): Response
    {
        return $this->render('consulta/show.html.twig', [
            'consultum' => $consultum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_consulta_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Consulta $consultum, ConsultaRepository $consultaRepository): Response
    {
        $form = $this->createForm(ConsultaUsuariosType::class, $consultum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $consultaRepository->add($consultum, true);

            return $this->redirectToRoute('app_consulta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('consulta/edit.html.twig', [
            'consultum' => $consultum,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_consulta_delete", methods={"POST"})
     */
    public function delete(Request $request, Consulta $consultum, ConsultaRepository $consultaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultum->getId(), $request->request->get('_token'))) {
            $consultaRepository->remove($consultum, true);
        }

        return $this->redirectToRoute('app_consulta_index', [], Response::HTTP_SEE_OTHER);
    }
}
