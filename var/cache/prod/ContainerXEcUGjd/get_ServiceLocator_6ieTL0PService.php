<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6ieTL0PService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.6ieTL0P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6ieTL0P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
        ], [
            'categoriaRepository' => 'App\\Repository\\CategoriaRepository',
        ]);
    }
}
