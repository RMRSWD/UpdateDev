<?php

namespace ContainerE6ei0mX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XvAl5nxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XvAl5nx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XvAl5nx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CoursController::delete' => ['privates', '.service_locator.BHmLGFq', 'get_ServiceLocator_BHmLGFqService', true],
            'App\\Controller\\CoursController::edit' => ['privates', '.service_locator.BHmLGFq', 'get_ServiceLocator_BHmLGFqService', true],
            'App\\Controller\\CoursController::index' => ['privates', '.service_locator.LXOW0.L', 'get_ServiceLocator_LXOW0_LService', true],
            'App\\Controller\\CoursController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CoursController::show' => ['privates', '.service_locator.eeiR1bl', 'get_ServiceLocator_EeiR1blService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CoursController:delete' => ['privates', '.service_locator.BHmLGFq', 'get_ServiceLocator_BHmLGFqService', true],
            'App\\Controller\\CoursController:edit' => ['privates', '.service_locator.BHmLGFq', 'get_ServiceLocator_BHmLGFqService', true],
            'App\\Controller\\CoursController:index' => ['privates', '.service_locator.LXOW0.L', 'get_ServiceLocator_LXOW0_LService', true],
            'App\\Controller\\CoursController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CoursController:show' => ['privates', '.service_locator.eeiR1bl', 'get_ServiceLocator_EeiR1blService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CoursController::delete' => '?',
            'App\\Controller\\CoursController::edit' => '?',
            'App\\Controller\\CoursController::index' => '?',
            'App\\Controller\\CoursController::new' => '?',
            'App\\Controller\\CoursController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CoursController:delete' => '?',
            'App\\Controller\\CoursController:edit' => '?',
            'App\\Controller\\CoursController:index' => '?',
            'App\\Controller\\CoursController:new' => '?',
            'App\\Controller\\CoursController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}