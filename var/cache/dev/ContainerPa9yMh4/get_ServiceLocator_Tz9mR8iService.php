<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tz9mR8iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tz9mR8i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tz9mR8i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'UserRepository' => ['privates', 'App\\Repository\\MedecinRepository', 'getMedecinRepositoryService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'passwordEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
        ], [
            'UserRepository' => 'App\\Repository\\MedecinRepository',
            'managerRegistry' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
