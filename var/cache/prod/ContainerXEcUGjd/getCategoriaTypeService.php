<?php

namespace ContainerXEcUGjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriaTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CategoriaType' shared autowired service.
     *
     * @return \App\Form\CategoriaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CategoriaType'] = new \App\Form\CategoriaType();
    }
}
