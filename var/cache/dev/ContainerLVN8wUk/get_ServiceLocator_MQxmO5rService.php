<?php

namespace ContainerLVN8wUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MQxmO5rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mQxmO5r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mQxmO5r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'matterRepository' => ['privates', 'App\\Repository\\MatterRepository', 'getMatterRepositoryService', true],
        ], [
            'matterRepository' => 'App\\Repository\\MatterRepository',
        ]);
    }
}
