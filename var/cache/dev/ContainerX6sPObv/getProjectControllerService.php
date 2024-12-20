<?php

namespace ContainerX6sPObv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProjectController' shared autowired service.
     *
     * @return \App\Controller\ProjectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProjectController.php';

        $container->services['App\\Controller\\ProjectController'] = $instance = new \App\Controller\ProjectController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\ProjectController', $container));

        return $instance;
    }
}
