<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClienteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ClienteType' shared autowired service.
     *
     * @return \App\Form\ClienteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ClienteType'] = new \App\Form\ClienteType();
    }
}
