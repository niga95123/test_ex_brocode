<?php

namespace ContainerRxZjrbN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cu_M80Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._cu.M80' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._cu.M80'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ApiController::recruitDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::recruitDev()', 'getApiControllerrecruitDevService', true],
            'App\\Controller\\ApiController::transferDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::transferDev()', 'getApiControllertransferDevService', true],
            'App\\Controller\\ApiController::updatePosDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::updatePosDev()', 'getApiControllerupdatePosDevService', true],
            'App\\Controller\\ApiController::fireDev' => ['privates', '.service_locator.kj_ypeV.App\\Controller\\ApiController::fireDev()', 'getApiControllerfireDevService', true],
            'App\\Controller\\ApiController::createProj' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::createProj()', 'getApiControllercreateProjService', true],
            'App\\Controller\\ApiController::fireProj' => ['privates', '.service_locator.izzmqhB.App\\Controller\\ApiController::fireProj()', 'getApiControllerfireProjService', true],
            'App\\Controller\\ApiController::validateData' => ['privates', '.service_locator.IOcYRsz.App\\Controller\\ApiController::validateData()', 'getApiControllervalidateDataService', true],
            'App\\Controller\\DeveloperController::index' => ['privates', '.service_locator.P.blNFL.App\\Controller\\DeveloperController::index()', 'getDeveloperControllerindexService', true],
            'App\\Controller\\DeveloperController::new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\DeveloperController::new()', 'getDeveloperControllernewService', true],
            'App\\Controller\\DeveloperController::show' => ['privates', '.service_locator.ni56v.G.App\\Controller\\DeveloperController::show()', 'getDeveloperControllershowService', true],
            'App\\Controller\\DeveloperController::edit' => ['privates', '.service_locator.WPvjtlV.App\\Controller\\DeveloperController::edit()', 'getDeveloperControllereditService', true],
            'App\\Controller\\DeveloperController::delete' => ['privates', '.service_locator.WPvjtlV.App\\Controller\\DeveloperController::delete()', 'getDeveloperControllerdeleteService', true],
            'App\\Controller\\ProjectController::index' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\ProjectController::new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProjectController::new()', 'getProjectControllernewService', true],
            'App\\Controller\\ProjectController::show' => ['privates', '.service_locator.mlTFQ4a.App\\Controller\\ProjectController::show()', 'getProjectControllershowService', true],
            'App\\Controller\\ProjectController::edit' => ['privates', '.service_locator.F1tB7lc.App\\Controller\\ProjectController::edit()', 'getProjectControllereditService', true],
            'App\\Controller\\ProjectController::delete' => ['privates', '.service_locator.F1tB7lc.App\\Controller\\ProjectController::delete()', 'getProjectControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ApiController:recruitDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::recruitDev()', 'getApiControllerrecruitDevService', true],
            'App\\Controller\\ApiController:transferDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::transferDev()', 'getApiControllertransferDevService', true],
            'App\\Controller\\ApiController:updatePosDev' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::updatePosDev()', 'getApiControllerupdatePosDevService', true],
            'App\\Controller\\ApiController:fireDev' => ['privates', '.service_locator.kj_ypeV.App\\Controller\\ApiController::fireDev()', 'getApiControllerfireDevService', true],
            'App\\Controller\\ApiController:createProj' => ['privates', '.service_locator.bHSkjnx.App\\Controller\\ApiController::createProj()', 'getApiControllercreateProjService', true],
            'App\\Controller\\ApiController:fireProj' => ['privates', '.service_locator.izzmqhB.App\\Controller\\ApiController::fireProj()', 'getApiControllerfireProjService', true],
            'App\\Controller\\ApiController:validateData' => ['privates', '.service_locator.IOcYRsz.App\\Controller\\ApiController::validateData()', 'getApiControllervalidateDataService', true],
            'App\\Controller\\DeveloperController:index' => ['privates', '.service_locator.P.blNFL.App\\Controller\\DeveloperController::index()', 'getDeveloperControllerindexService', true],
            'App\\Controller\\DeveloperController:new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\DeveloperController::new()', 'getDeveloperControllernewService', true],
            'App\\Controller\\DeveloperController:show' => ['privates', '.service_locator.ni56v.G.App\\Controller\\DeveloperController::show()', 'getDeveloperControllershowService', true],
            'App\\Controller\\DeveloperController:edit' => ['privates', '.service_locator.WPvjtlV.App\\Controller\\DeveloperController::edit()', 'getDeveloperControllereditService', true],
            'App\\Controller\\DeveloperController:delete' => ['privates', '.service_locator.WPvjtlV.App\\Controller\\DeveloperController::delete()', 'getDeveloperControllerdeleteService', true],
            'App\\Controller\\ProjectController:index' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\ProjectController:new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProjectController::new()', 'getProjectControllernewService', true],
            'App\\Controller\\ProjectController:show' => ['privates', '.service_locator.mlTFQ4a.App\\Controller\\ProjectController::show()', 'getProjectControllershowService', true],
            'App\\Controller\\ProjectController:edit' => ['privates', '.service_locator.F1tB7lc.App\\Controller\\ProjectController::edit()', 'getProjectControllereditService', true],
            'App\\Controller\\ProjectController:delete' => ['privates', '.service_locator.F1tB7lc.App\\Controller\\ProjectController::delete()', 'getProjectControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ApiController::recruitDev' => '?',
            'App\\Controller\\ApiController::transferDev' => '?',
            'App\\Controller\\ApiController::updatePosDev' => '?',
            'App\\Controller\\ApiController::fireDev' => '?',
            'App\\Controller\\ApiController::createProj' => '?',
            'App\\Controller\\ApiController::fireProj' => '?',
            'App\\Controller\\ApiController::validateData' => '?',
            'App\\Controller\\DeveloperController::index' => '?',
            'App\\Controller\\DeveloperController::new' => '?',
            'App\\Controller\\DeveloperController::show' => '?',
            'App\\Controller\\DeveloperController::edit' => '?',
            'App\\Controller\\DeveloperController::delete' => '?',
            'App\\Controller\\ProjectController::index' => '?',
            'App\\Controller\\ProjectController::new' => '?',
            'App\\Controller\\ProjectController::show' => '?',
            'App\\Controller\\ProjectController::edit' => '?',
            'App\\Controller\\ProjectController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ApiController:recruitDev' => '?',
            'App\\Controller\\ApiController:transferDev' => '?',
            'App\\Controller\\ApiController:updatePosDev' => '?',
            'App\\Controller\\ApiController:fireDev' => '?',
            'App\\Controller\\ApiController:createProj' => '?',
            'App\\Controller\\ApiController:fireProj' => '?',
            'App\\Controller\\ApiController:validateData' => '?',
            'App\\Controller\\DeveloperController:index' => '?',
            'App\\Controller\\DeveloperController:new' => '?',
            'App\\Controller\\DeveloperController:show' => '?',
            'App\\Controller\\DeveloperController:edit' => '?',
            'App\\Controller\\DeveloperController:delete' => '?',
            'App\\Controller\\ProjectController:index' => '?',
            'App\\Controller\\ProjectController:new' => '?',
            'App\\Controller\\ProjectController:show' => '?',
            'App\\Controller\\ProjectController:edit' => '?',
            'App\\Controller\\ProjectController:delete' => '?',
        ]);
    }
}
