<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BIQR53JService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.bIQR53J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bIQR53J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stock' => ['privates', '.errored..service_locator.bIQR53J.App\\Entity\\Stock', NULL, 'Cannot autowire service ".service_locator.bIQR53J": it references class "App\\Entity\\Stock" but no such service exists.'],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'stock' => 'App\\Entity\\Stock',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}