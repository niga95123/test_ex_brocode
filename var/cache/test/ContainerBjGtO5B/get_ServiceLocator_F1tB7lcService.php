<?php

namespace ContainerBjGtO5B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F1tB7lcService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.F1tB7lc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F1tB7lc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'project' => ['privates', '.errored..service_locator.F1tB7lc.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.F1tB7lc": it needs an instance of "App\\Entity\\Project" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'project' => 'App\\Entity\\Project',
            'entityManager' => '?',
        ]);
    }
}
