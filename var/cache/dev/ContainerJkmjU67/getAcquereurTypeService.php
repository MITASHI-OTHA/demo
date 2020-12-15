<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcquereurTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AcquereurType' shared autowired service.
     *
     * @return \App\Form\AcquereurType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AcquereurType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DataTransformer/StringToDateTransformer.php';

        return $container->privates['App\\Form\\AcquereurType'] = new \App\Form\AcquereurType(($container->privates['App\\Form\\DataTransformer\\StringToDateTransformer'] ?? ($container->privates['App\\Form\\DataTransformer\\StringToDateTransformer'] = new \App\Form\DataTransformer\StringToDateTransformer())));
    }
}