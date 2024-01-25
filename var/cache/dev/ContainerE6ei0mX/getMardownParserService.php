<?php

namespace ContainerE6ei0mX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMardownParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MardownParser' shared autowired service.
     *
     * @return \App\Service\MardownParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MardownParser.php';

        return $container->privates['App\\Service\\MardownParser'] = new \App\Service\MardownParser();
    }
}
