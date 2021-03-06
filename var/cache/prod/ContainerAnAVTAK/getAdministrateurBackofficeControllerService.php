<?php

namespace ContainerAnAVTAK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdministrateurBackofficeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdministrateurBackofficeController' shared autowired service.
     *
     * @return \App\Controller\AdministrateurBackofficeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdministrateurBackofficeController'] = $instance = new \App\Controller\AdministrateurBackofficeController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AdministrateurBackofficeController', $container));

        return $instance;
    }
}
