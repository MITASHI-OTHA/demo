<?php

namespace App\Form;

use App\Entity\AdImages;
use App\Form\MediaAdsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdImagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photo1', MediaAdsType::class, 
            [
                'label' => 'Photo n°1',
            ])
            ->add('photo2', MediaAdsType::class, 
            [
                'label' => 'Photo n°2',
            ])
            ->add('photo3', MediaAdsType::class, 
            [
                'label' => 'Photo n°3',
            ])
            ->add('photo4', MediaAdsType::class, 
            [
                'label' => 'Photo n°4',
            ])
            ->add('photo5', MediaAdsType::class, 
            [
                'label' => 'Photo n°5',
            ])
            ->add('photo6', MediaAdsType::class, 
            [
                'label' => 'Photo n°6',
            ])
            ->add('photo7', MediaAdsType::class, 
            [
                'label' => 'Photo n°7',
            ])
            ->add('photo8', MediaAdsType::class, 
            [
                'label' => 'Photo n°8',
            ])
            ->add('photo9', MediaAdsType::class, 
            [
                'label' => 'Photo n°9',
            ])
            ->add('photo10', MediaAdsType::class, 
            [
                'label' => 'Photo n°10',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdImages::class,
            'attr' => 
            [
                'novalidate' => 'novalidate',
            ]
        ]);
    }
}
