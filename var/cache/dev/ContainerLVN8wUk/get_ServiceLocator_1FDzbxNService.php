<?php

namespace ContainerLVN8wUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1FDzbxNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1FDzbxN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1FDzbxN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'matter' => ['privates', '.errored..service_locator.1FDzbxN.App\\Entity\\Matter', NULL, 'Cannot autowire service ".service_locator.1FDzbxN": it references class "App\\Entity\\Matter" but no such service exists.'],
        ], [
            'matter' => 'App\\Entity\\Matter',
        ]);
    }
}