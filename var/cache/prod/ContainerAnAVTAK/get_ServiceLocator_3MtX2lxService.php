<?php

namespace ContainerAnAVTAK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3MtX2lxService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.3MtX2lx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3MtX2lx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'websiteSaveRepository' => ['privates', 'App\\Repository\\WebsiteSaveRepository', 'getWebsiteSaveRepositoryService', true],
        ], [
            'doctrine' => '?',
            'factory' => '?',
            'websiteSaveRepository' => 'App\\Repository\\WebsiteSaveRepository',
        ]);
    }
}
