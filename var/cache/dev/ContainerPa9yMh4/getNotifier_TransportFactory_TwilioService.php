<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_TransportFactory_TwilioService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.transport_factory.twilio' shared service.
     *
     * @return \Symfony\Component\Notifier\Bridge\Twilio\TwilioTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twilio-notifier'.\DIRECTORY_SEPARATOR.'TwilioTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['notifier.transport_factory.twilio'])) {
            return $container->privates['notifier.transport_factory.twilio'];
        }

        return $container->privates['notifier.transport_factory.twilio'] = new \Symfony\Component\Notifier\Bridge\Twilio\TwilioTransportFactory($a, ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}
