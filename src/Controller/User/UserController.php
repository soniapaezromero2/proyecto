<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Entity\Role;
use App\Form\User1Type;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="app_user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(User1Type::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update password..
            $entityManager = $this->getDoctrine()->getManager();
            $passwordEncoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passwordEncoded);

            // Update roles..
            $arrayRoles = $form['roles_in_form']->getData();
            $roles = $entityManager->getRepository(Role::class)->findAll();
            foreach ($roles as $role) {
                if (in_array($role->getId(), $arrayRoles)) {
                    $user->addRole($role);
                } else {
                    $user->removeRole($role);
                }
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(User1Type::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Update password..
            $entityManager = $this->getDoctrine()->getManager();
            $passwordEncoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passwordEncoded);

            // Update roles..
            $arrayRoles = $form['roles_in_form']->getData();
            $roles = $entityManager->getRepository(Role::class)->findAll();
            foreach ($roles as $role) {
                if (in_array($role->getId(), $arrayRoles)) {
                    $user->addRole($role);
                } else {
                    $user->removeRole($role);
                }
            }



            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index');

        }


        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
