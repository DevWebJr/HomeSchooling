<?php

namespace ContainerLVN8wUk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMatterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MatterController' shared autowired service.
     *
     * @return \App\Controller\MatterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\MatterController.php';

        $container->services['App\\Controller\\MatterController'] = $instance = new \App\Controller\MatterController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MatterController', $container));

        return $instance;
    }
}
