<?php

namespace ContainerCMyHnMh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreerSalleTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CreerSalleType' shared autowired service.
     *
     * @return \App\Form\CreerSalleType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CreerSalleType.php';

        return $container->privates['App\\Form\\CreerSalleType'] = new \App\Form\CreerSalleType();
    }
}