<?php

namespace ContainerX6sPObv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllerfireDevService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WPvjtlV.App\Controller\ApiController::fireDev()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.WPvjtlV'] ?? $container->load('get_ServiceLocator_WPvjtlVService'));

        if (isset($container->privates['.service_locator.WPvjtlV.App\\Controller\\ApiController::fireDev()'])) {
            return $container->privates['.service_locator.WPvjtlV.App\\Controller\\ApiController::fireDev()'];
        }

        return $container->privates['.service_locator.WPvjtlV.App\\Controller\\ApiController::fireDev()'] = $a->withContext('App\\Controller\\ApiController::fireDev()', $container);
    }
}
