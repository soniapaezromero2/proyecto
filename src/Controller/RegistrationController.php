<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Entity\Cliente;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    private $users;
    private $roles;

    public function __construct(UserRepository $users, RoleRepository $roles)
    {
        $this->users = $users;
        $this->roles = $roles;

    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, UserRepository $userRepository, VerifyEmailHelperInterface $verifyEmailHelper,MailerInterface $mailer): Response
    {

        $user = new User();
        $cliente = new Cliente();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $code = "ROLE_USER";
        $rol = $entityManager->getRepository(Role::class)->findBy(['code' => $code]);
        $user->setRoles($rol);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $nameForm = $form->get('name')->getData();
            $emailForm = $form->get('email')->getData();
            $userEmail = $this->getDoctrine()->getRepository(User::class)->findBy(['email' => $emailForm]);
            $exist = count($userEmail);
            if ($exist == 1) {
                $this->addFlash('danger', 'El email ya esta registrado.');
                return $this->redirectToRoute('app_register');
            }

            $cliente->setName($nameForm);
            $cliente->setEmail($emailForm);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $cliente->setUsuario($user);
            $entityManager->persist($cliente);
            $entityManager->flush();


            $signatureComponents = $verifyEmailHelper->generateSignature(
                'app_verify_email',
                $user->getId(),
                $user->getEmail(),

                ['id' => $user->getId()]
            );

            $email = (new Email())
                ->from('soniapaezromeroproyecto@gmail.com')
                ->to($emailForm)
                ->subject('Confirm your email!')
                ->text('Confirm your email at: '.$signatureComponents->getSignedUrl());
            $mailer->send($email);
            return $this->redirectToRoute('app_home');
        }
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/verify", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request, VerifyEmailHelperInterface $verifyEmailHelper, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->find($request->query->get('id'));
        if (!$user) {
            throw $this->createNotFoundException();
        }
        try {
            $verifyEmailHelper->validateEmailConfirmation(
                $request->getUri(),
                $user->getId(),
                $user->getEmail(),
            );
        } catch (VerifyEmailExceptionInterface $e) {
            $this->addFlash('error', $e->getReason());
            return $this->redirectToRoute('app_register');
        }
        $user->setIsVerified(true);
        $entityManager->flush();
        $this->addFlash('success', 'Account Verified! You can now log in.');
        return $this->redirectToRoute('app_login');
    }
    /**
     * @Route("/verify/resend", name="app_verify_resend_email")
     */
    public function resendVerifyEmail()
    {
        return $this->render('registration/resend_verify_email.html.twig');
    }
}