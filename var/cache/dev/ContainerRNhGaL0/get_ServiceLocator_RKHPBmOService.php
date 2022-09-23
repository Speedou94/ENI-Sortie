<?php

namespace ContainerRNhGaL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RKHPBmOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RKHPBmO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RKHPBmO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'city' => ['privates', '.errored..service_locator.RKHPBmO.App\\Entity\\City', NULL, 'Cannot autowire service ".service_locator.RKHPBmO": it references class "App\\Entity\\City" but no such service exists.'],
            'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', true],
        ], [
            'city' => 'App\\Entity\\City',
            'locationRepository' => 'App\\Repository\\LocationRepository',
        ]);
    }
}
