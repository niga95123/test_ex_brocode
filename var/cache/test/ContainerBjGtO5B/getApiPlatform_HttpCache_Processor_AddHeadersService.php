<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_HttpCache_Processor_AddHeadersService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.http_cache.processor.add_headers' shared service.
     *
     * @return \ApiPlatform\HttpCache\State\AddHeadersProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/http-cache/State/AddHeadersProcessor.php';

        return $container->privates['api_platform.http_cache.processor.add_headers'] = new \ApiPlatform\HttpCache\State\AddHeadersProcessor(($container->privates['api_platform.state_processor.add_link_header'] ?? $container->load('getApiPlatform_StateProcessor_AddLinkHeaderService')), true, NULL, NULL, $container->parameters['api_platform.http_cache.vary'], NULL);
    }
}
