<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Hydra_Processor_LinkService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.hydra.processor.link' shared service.
     *
     * @return \ApiPlatform\Hydra\State\HydraLinkProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Util/CorsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/hydra/State/HydraLinkProcessor.php';

        return $container->privates['api_platform.hydra.processor.link'] = new \ApiPlatform\Hydra\State\HydraLinkProcessor(($container->privates['api_platform.hydra.processor.link.inner'] ?? $container->load('getApiPlatform_Hydra_Processor_Link_InnerService')), ($container->privates['api_platform.router'] ?? self::getApiPlatform_RouterService($container)));
    }
}