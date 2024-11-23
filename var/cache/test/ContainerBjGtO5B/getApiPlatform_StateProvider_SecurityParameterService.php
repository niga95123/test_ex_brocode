<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_SecurityParameterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.security_parameter' shared service.
     *
     * @return \ApiPlatform\State\Provider\SecurityParameterProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Util/ParameterParserTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Provider/SecurityParameterProvider.php';

        return $container->privates['api_platform.state_provider.security_parameter'] = new \ApiPlatform\State\Provider\SecurityParameterProvider(($container->privates['api_platform.state_provider.security_parameter.inner'] ?? $container->load('getApiPlatform_StateProvider_SecurityParameter_InnerService')), ($container->privates['api_platform.security.resource_access_checker'] ?? self::getApiPlatform_Security_ResourceAccessCheckerService($container)));
    }
}