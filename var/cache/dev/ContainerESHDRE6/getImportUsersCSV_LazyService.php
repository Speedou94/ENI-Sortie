<?php

namespace ContainerESHDRE6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportUsersCSV_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\ImportUsersCSV.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\ImportUsersCSV.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:create-user', [], 'Création d\'utilisateurs à partir d\'un fichier CSV.', false, function () use ($container): \App\Command\ImportUsersCSV {
            return ($container->privates['App\\Command\\ImportUsersCSV'] ?? $container->load('getImportUsersCSVService'));
        });
    }
}
