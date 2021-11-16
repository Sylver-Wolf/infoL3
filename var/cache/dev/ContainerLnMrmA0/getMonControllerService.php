<?php

namespace ContainerLnMrmA0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MonController' shared autowired service.
     *
     * @return \App\Controller\MonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MonController.php';

        $container->services['App\\Controller\\MonController'] = $instance = new \App\Controller\MonController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\MonController', $container));

        return $instance;
    }
}
