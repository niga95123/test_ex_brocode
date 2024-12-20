<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_ContentNegotiationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/metadata/Util/ContentNegotiationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Provider/ContentNegotiationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';

        return $container->privates['api_platform.state_provider.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(($container->privates['api_platform.state_provider.parameter'] ?? $container->load('getApiPlatform_StateProvider_ParameterService')), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}
