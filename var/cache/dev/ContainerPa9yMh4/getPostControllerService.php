<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PostController' shared autowired service.
     *
     * @return \App\Controller\PostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PostController.php';

        $container->services['App\\Controller\\PostController'] = $instance = new \App\Controller\PostController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\PostRepository'] ?? $container->load('getPostRepositoryService')), ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\PostController', $container));

        return $instance;
    }
}