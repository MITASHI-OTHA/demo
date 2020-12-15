<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultListeners_AttachEntityListenersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        $container->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = $instance = new \Doctrine\ORM\Tools\AttachEntityListenersListener();

        $instance->addEntityListener('App\\Entity\\User', 'App\\EntityListener\\NotifyRegistrationConfirmation', 'prePersist');
        $instance->addEntityListener('App\\Entity\\Ad', 'App\\EntityListener\\SetUserAdAuthor', 'prePersist');

        return $instance;
    }
}
