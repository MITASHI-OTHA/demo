<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElFinderControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'FM\ElfinderBundle\Controller\ElFinderController' shared service.
     *
     * @return \FM\ElfinderBundle\Controller\ElFinderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Controller/ElFinderController.php';

        $container->services['FM\\ElfinderBundle\\Controller\\ElFinderController'] = $instance = new \FM\ElfinderBundle\Controller\ElFinderController();

        $instance->setContainer($container);

        return $instance;
    }
}
