<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_DefinitionNameFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.json_schema.definition_name_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\DefinitionNameFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/DefinitionNameFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/DefinitionNameFactory.php';

        return $container->privates['api_platform.json_schema.definition_name_factory'] = new \ApiPlatform\JsonSchema\DefinitionNameFactory($container->parameters['api_platform.jsonschema_formats']);
    }
}
