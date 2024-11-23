<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_UriVariables_Transformer_IntegerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.uri_variables.transformer.integer' shared service.
     *
     * @return \ApiPlatform\Metadata\UriVariableTransformer\IntegerUriVariableTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/metadata/UriVariableTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/metadata/UriVariableTransformer/IntegerUriVariableTransformer.php';

        return $container->privates['api_platform.uri_variables.transformer.integer'] = new \ApiPlatform\Metadata\UriVariableTransformer\IntegerUriVariableTransformer();
    }
}