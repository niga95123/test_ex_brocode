<?php

namespace ContainerRxZjrbN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F1tB7lc.App\Controller\ProjectController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.F1tB7lc'] ?? $container->load('get_ServiceLocator_F1tB7lcService'));

        if (isset($container->privates['.service_locator.F1tB7lc.App\\Controller\\ProjectController::edit()'])) {
            return $container->privates['.service_locator.F1tB7lc.App\\Controller\\ProjectController::edit()'];
        }

        return $container->privates['.service_locator.F1tB7lc.App\\Controller\\ProjectController::edit()'] = $a->withContext('App\\Controller\\ProjectController::edit()', $container);
    }
}