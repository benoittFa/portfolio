<?php

namespace ContainerXaAnUDC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVitrineWebsiteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VitrineWebsiteController' shared autowired service.
     *
     * @return \App\Controller\VitrineWebsiteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VitrineWebsiteController.php';

        $container->services['App\\Controller\\VitrineWebsiteController'] = $instance = new \App\Controller\VitrineWebsiteController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\VitrineWebsiteController', $container));

        return $instance;
    }
}
