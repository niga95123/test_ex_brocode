<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_NegotiatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.negotiator' shared service.
     *
     * @return \Negotiation\Negotiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';

        return $container->privates['api_platform.negotiator'] = new \Negotiation\Negotiator();
    }
}