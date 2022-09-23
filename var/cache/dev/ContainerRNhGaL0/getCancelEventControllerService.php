<?php

namespace ContainerRNhGaL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelEventControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CancelEventController' shared autowired service.
     *
     * @return \App\Controller\CancelEventController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CancelEventController.php';

        $container->services['App\\Controller\\CancelEventController'] = $instance = new \App\Controller\CancelEventController();

        $instance->setContainer(($container->privates['.service_locator.FOE6yGi'] ?? $container->load('get_ServiceLocator_FOE6yGiService'))->withContext('App\\Controller\\CancelEventController', $container));

        return $instance;
    }
}