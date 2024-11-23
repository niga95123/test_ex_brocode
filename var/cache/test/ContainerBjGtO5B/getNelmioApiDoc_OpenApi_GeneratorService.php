<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_OpenApi_GeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.open_api.generator' shared service.
     *
     * @return \OpenApi\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zircote/swagger-php/src/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Processor/NullablePropertyProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Processor/MapQueryStringProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Processor/MapRequestPayloadProcessor.php';

        $container->privates['nelmio_api_doc.open_api.generator'] = $instance = new \OpenApi\Generator();

        $instance->addProcessor(($container->privates['nelmio_api_doc.swagger.processor.nullable_property'] ??= new \Nelmio\ApiDocBundle\Processor\NullablePropertyProcessor()), NULL);
        $instance->addProcessor(($container->privates['nelmio_api_doc.swagger.processor.map_query_string'] ??= new \Nelmio\ApiDocBundle\Processor\MapQueryStringProcessor()), NULL);
        $instance->addProcessor(($container->privates['nelmio_api_doc.swagger.processor.map_request_payload'] ??= new \Nelmio\ApiDocBundle\Processor\MapRequestPayloadProcessor()), NULL);

        return $instance;
    }
}
