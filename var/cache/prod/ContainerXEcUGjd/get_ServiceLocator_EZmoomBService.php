<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EZmoomBService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eZmoomB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eZmoomB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chartBuilder' => ['privates', 'chartjs.builder', 'getChartjs_BuilderService', true],
            'consultaRepository' => ['privates', 'App\\Repository\\ConsultaRepository', 'getConsultaRepositoryService', true],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'chartBuilder' => '?',
            'consultaRepository' => 'App\\Repository\\ConsultaRepository',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}
