<?php

namespace ContainerAnAVTAK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebsiteSaveRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\WebsiteSaveRepository' shared autowired service.
     *
     * @return \App\Repository\WebsiteSaveRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\WebsiteSaveRepository'] = new \App\Repository\WebsiteSaveRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
