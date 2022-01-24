<?php

namespace ContainerXaAnUDC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdministrateurBackofficeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdministrateurBackofficeController' shared autowired service.
     *
     * @return \App\Controller\AdministrateurBackofficeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdministrateurBackofficeController.php';

        $container->services['App\\Controller\\AdministrateurBackofficeController'] = $instance = new \App\Controller\AdministrateurBackofficeController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdministrateurBackofficeController', $container));

        return $instance;
    }
}