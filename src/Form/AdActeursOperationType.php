<?php

namespace App\Form;

use App\Form\MediaAdsType;
use App\Entity\AdActeursOperation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdActeursOperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, 
            [
                'label' => 'Nom de l’acteur (personne physique ou morale) * ',
            ])
            ->add('role', TextType::class, 
            [
                'label' => 'Rôle de l\'acteur (ex : promoteur, maître d’ouvrage, AMU, AMO, architecte, référant du groupe d’habitants dans le cas d’une opération en autopromotion, etc.) * ',
            ])
            ->add('description', TextareaType::class, 
            [
                'label' => 'Descriptif * ',
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('image', MediaAdsType::class, 
            [
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdActeursOperation::class,
        ]);
    }
}
