<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HMb5pZ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HMb5pZ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HMb5pZ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.HMb5pZ8.App\\Entity\\Ad', NULL, 'Cannot autowire service ".service_locator.HMb5pZ8": it references class "App\\Entity\\Ad" but no such service exists.'],
        ], [
            'annonce' => 'App\\Entity\\Ad',
        ]);
    }
}
