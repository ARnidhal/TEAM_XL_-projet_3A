<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemplateControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TemplateController.php';

        return $container->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
