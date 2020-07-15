<?php

namespace ContainerLVN8wUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VRM0Yd1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vRM0Yd1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vRM0Yd1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ressourcesRepository' => ['privates', 'App\\Repository\\RessourcesRepository', 'getRessourcesRepositoryService', true],
        ], [
            'ressourcesRepository' => 'App\\Repository\\RessourcesRepository',
        ]);
    }
}
