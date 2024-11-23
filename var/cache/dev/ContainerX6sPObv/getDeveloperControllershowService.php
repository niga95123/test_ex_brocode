<?php

namespace ContainerX6sPObv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeveloperControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ni56v.G.App\Controller\DeveloperController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ni56v.G.App\\Controller\\DeveloperController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'developer' => ['privates', '.errored..service_locator.ni56v.G.App\\Entity\\Developer', NULL, 'Cannot autowire service ".service_locator.ni56v.G": it needs an instance of "App\\Entity\\Developer" but this type has been excluded in "config/services.yaml".'],
        ], [
            'developer' => 'App\\Entity\\Developer',
        ]))->withContext('App\\Controller\\DeveloperController::show()', $container);
    }
}
