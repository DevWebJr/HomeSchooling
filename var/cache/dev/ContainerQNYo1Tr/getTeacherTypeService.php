<?php

namespace ContainerQNYo1Tr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TeacherType' shared autowired service.
     *
     * @return \App\Form\TeacherType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\TeacherType.php';

        return $container->privates['App\\Form\\TeacherType'] = new \App\Form\TeacherType();
    }
}
