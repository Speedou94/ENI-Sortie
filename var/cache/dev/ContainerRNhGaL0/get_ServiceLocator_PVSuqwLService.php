<?php

namespace ContainerRNhGaL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PVSuqwLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pVSuqwL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pVSuqwL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'currentUser' => ['privates', '.errored..service_locator.pVSuqwL.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.pVSuqwL": it references class "App\\Entity\\User" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'currentUser' => 'App\\Entity\\User',
            'manager' => '?',
        ]);
    }
}