<?php

namespace ContainerRxZjrbN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeveloperControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WPvjtlV.App\Controller\DeveloperController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WPvjtlV.App\\Controller\\DeveloperController::delete()'] = ($container->privates['.service_locator.WPvjtlV'] ?? $container->load('get_ServiceLocator_WPvjtlVService'))->withContext('App\\Controller\\DeveloperController::delete()', $container);
    }
}
