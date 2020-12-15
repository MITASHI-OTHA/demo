<?php

namespace ContainerJkmjU67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AdsType' shared autowired service.
     *
     * @return \App\Form\AdsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AdsType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DataTransformer/StringToDateTransformer.php';

        return $container->privates['App\\Form\\AdsType'] = new \App\Form\AdsType(($container->privates['App\\Form\\DataTransformer\\StringToDateTransformer'] ?? ($container->privates['App\\Form\\DataTransformer\\StringToDateTransformer'] = new \App\Form\DataTransformer\StringToDateTransformer())));
    }
}
