<?php

namespace ContainerESHDRE6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelEventServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CancelEventService' shared autowired service.
     *
     * @return \App\Service\CancelEventService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CancelEventService.php';

        return $container->privates['App\\Service\\CancelEventService'] = new \App\Service\CancelEventService(($container->privates['App\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));
    }
}
