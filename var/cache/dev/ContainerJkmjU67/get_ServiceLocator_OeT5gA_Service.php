<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OeT5gA_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OeT5gA.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OeT5gA.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ad' => ['privates', '.errored..service_locator.OeT5gA..App\\Entity\\Ad', NULL, 'Cannot autowire service ".service_locator.OeT5gA.": it references class "App\\Entity\\Ad" but no such service exists.'],
        ], [
            'ad' => 'App\\Entity\\Ad',
        ]);
    }
}
