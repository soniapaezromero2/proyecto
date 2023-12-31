<?php

namespace Container69Pwdtz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPanelControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\PanelController' shared autowired service.
     *
     * @return \App\Controller\PanelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PanelController.php';

        $container->services['App\\Controller\\PanelController'] = $instance = new \App\Controller\PanelController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\ClienteRepository'] ?? $container->load('getClienteRepositoryService')), ($container->privates['App\\Repository\\PedidoRepository'] ?? $container->load('getPedidoRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\PanelController', $container));

        return $instance;
    }
}
