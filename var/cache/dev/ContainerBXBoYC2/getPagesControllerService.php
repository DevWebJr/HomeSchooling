<?php

namespace ContainerBXBoYC2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PagesController' shared autowired service.
     *
     * @return \App\Controller\PagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\PagesController.php';

        $container->services['App\\Controller\\PagesController'] = $instance = new \App\Controller\PagesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PagesController', $container));

        return $instance;
    }
}
