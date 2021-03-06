<?php

namespace ContainerXaAnUDC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExpositionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ExpositionController' shared autowired service.
     *
     * @return \App\Controller\ExpositionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ExpositionController.php';

        $container->services['App\\Controller\\ExpositionController'] = $instance = new \App\Controller\ExpositionController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ExpositionController', $container));

        return $instance;
    }
}
