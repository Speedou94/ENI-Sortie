<?php

namespace ContainerRNhGaL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserModificationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserModificationType' shared autowired service.
     *
     * @return \App\Form\UserModificationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserModificationType.php';

        return $container->privates['App\\Form\\UserModificationType'] = new \App\Form\UserModificationType();
    }
}
