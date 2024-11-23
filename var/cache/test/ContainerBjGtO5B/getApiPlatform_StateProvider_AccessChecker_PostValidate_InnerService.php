<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_AccessChecker_PostValidate_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.access_checker.post_validate.inner' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\State\ValidateProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/symfony/Validator/State/ValidateProvider.php';

        return $container->privates['api_platform.state_provider.access_checker.post_validate.inner'] = new \ApiPlatform\Symfony\Validator\State\ValidateProvider(($container->privates['api_platform.state_provider.access_checker.post_deserialize'] ?? $container->load('getApiPlatform_StateProvider_AccessChecker_PostDeserializeService')), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')));
    }
}