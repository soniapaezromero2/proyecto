<?php

namespace Container69Pwdtz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\Stock\StockController' shared autowired service.
     *
     * @return \App\Controller\Stock\StockController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Stock/StockController.php';

        $container->services['App\\Controller\\Stock\\StockController'] = $instance = new \App\Controller\Stock\StockController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Stock\\StockController', $container));

        return $instance;
    }
}
