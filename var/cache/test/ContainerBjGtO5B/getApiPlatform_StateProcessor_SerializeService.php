<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_SerializeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.serialize' shared service.
     *
     * @return \ApiPlatform\State\Processor\SerializeProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Processor/SerializeProcessor.php';

        return $container->privates['api_platform.state_processor.serialize'] = new \ApiPlatform\State\Processor\SerializeProcessor(($container->privates['api_platform.http_cache.processor.add_headers'] ?? $container->load('getApiPlatform_HttpCache_Processor_AddHeadersService')), ($container->privates['serializer'] ?? self::getSerializerService($container)), ($container->privates['api_platform.openapi.serializer_context_builder'] ?? $container->load('getApiPlatform_Openapi_SerializerContextBuilderService')));
    }
}
