<?php

namespace ContainerQNYo1Tr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xf66BK5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Xf66BK5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Xf66BK5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'level' => ['privates', '.errored..service_locator.Xf66BK5.App\\Entity\\Level', NULL, 'Cannot autowire service ".service_locator.Xf66BK5": it references class "App\\Entity\\Level" but no such service exists.'],
        ], [
            'level' => 'App\\Entity\\Level',
        ]);
    }
}
