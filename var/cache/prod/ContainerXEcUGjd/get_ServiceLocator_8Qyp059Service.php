<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8Qyp059Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.8Qyp059' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8Qyp059'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cliente' => ['privates', '.errored..service_locator.8Qyp059.App\\Entity\\Cliente', NULL, 'Cannot autowire service ".service_locator.8Qyp059": it references class "App\\Entity\\Cliente" but no such service exists.'],
            'clienteRepository' => ['privates', 'App\\Repository\\ClienteRepository', 'getClienteRepositoryService', true],
        ], [
            'cliente' => 'App\\Entity\\Cliente',
            'clienteRepository' => 'App\\Repository\\ClienteRepository',
        ]);
    }
}
