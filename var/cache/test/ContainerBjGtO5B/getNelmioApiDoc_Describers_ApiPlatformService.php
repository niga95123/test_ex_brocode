<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_ApiPlatformService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.describers.api_platform' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\ApiPlatformDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/DescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ExternalDocDescriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ApiPlatformDescriber.php';

        return $container->privates['nelmio_api_doc.describers.api_platform'] = new \Nelmio\ApiDocBundle\Describer\ApiPlatformDescriber(($container->privates['nelmio_api_doc.describers.api_platform.openapi'] ?? $container->load('getNelmioApiDoc_Describers_ApiPlatform_OpenapiService')), ($container->privates['api_platform.openapi.normalizer.legacy'] ?? self::getApiPlatform_Openapi_Normalizer_LegacyService($container)));
    }
}
