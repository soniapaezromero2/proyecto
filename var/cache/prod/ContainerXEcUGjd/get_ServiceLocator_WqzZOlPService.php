<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WqzZOlPService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wqzZOlP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wqzZOlP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'verifyEmailHelper' => ['privates', 'symfonycasts.verify_email.helper', 'getSymfonycasts_VerifyEmail_HelperService', true],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'userPasswordHasher' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'verifyEmailHelper' => '?',
        ]);
    }
}
