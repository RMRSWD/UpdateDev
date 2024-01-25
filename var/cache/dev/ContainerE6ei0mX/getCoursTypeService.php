<?php

namespace ContainerE6ei0mX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCoursTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CoursType' shared autowired service.
     *
     * @return \App\Form\CoursType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CoursType.php';

        return $container->privates['App\\Form\\CoursType'] = new \App\Form\CoursType();
    }
}
