<?php

namespace ContainerAnAVTAK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KJ6ksu7Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.KJ6ksu7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KJ6ksu7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
        ], [
            'em' => '?',
            'factory' => '?',
        ]);
    }
}
