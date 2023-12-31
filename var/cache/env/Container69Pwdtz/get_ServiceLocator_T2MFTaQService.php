<?php

namespace Container69Pwdtz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T2MFTaQService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.t2MFTaQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t2MFTaQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'novedadesRepository' => ['privates', 'App\\Repository\\NovedadesRepository', 'getNovedadesRepositoryService', true],
        ], [
            'novedadesRepository' => 'App\\Repository\\NovedadesRepository',
        ]);
    }
}
