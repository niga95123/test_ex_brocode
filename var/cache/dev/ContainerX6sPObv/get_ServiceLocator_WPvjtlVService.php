<?php

namespace ContainerX6sPObv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WPvjtlVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WPvjtlV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WPvjtlV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'developer' => ['privates', '.errored..service_locator.WPvjtlV.App\\Entity\\Developer', NULL, 'Cannot autowire service ".service_locator.WPvjtlV": it needs an instance of "App\\Entity\\Developer" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'developer' => 'App\\Entity\\Developer',
            'entityManager' => '?',
        ]);
    }
}