<?php

namespace ContainerQNYo1Tr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLevelTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\LevelType' shared autowired service.
     *
     * @return \App\Form\LevelType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\LevelType.php';

        return $container->privates['App\\Form\\LevelType'] = new \App\Form\LevelType();
    }
}
