<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Gg5RIGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Gg5RIG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Gg5RIG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'rendezvous' => ['privates', 'App\\Repository\\RapportRepository', 'getRapportRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'rendezvous' => 'App\\Repository\\RapportRepository',
        ]);
    }
}
