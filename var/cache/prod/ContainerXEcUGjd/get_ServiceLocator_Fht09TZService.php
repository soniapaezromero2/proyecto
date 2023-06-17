<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fht09TZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Fht09TZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fht09TZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clienteRepository' => ['privates', 'App\\Repository\\ClienteRepository', 'getClienteRepositoryService', true],
        ], [
            'clienteRepository' => 'App\\Repository\\ClienteRepository',
        ]);
    }
}
