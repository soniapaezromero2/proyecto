<?php

namespace Container69Pwdtz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HiS8AmkService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.hiS8Amk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hiS8Amk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoria' => ['privates', '.errored..service_locator.hiS8Amk.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.hiS8Amk": it references class "App\\Entity\\Categoria" but no such service exists.'],
            'categoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'categoria' => 'App\\Entity\\Categoria',
            'categoriaRepository' => 'App\\Repository\\CategoriaRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}
