<?php

namespace App\Form;

use App\Entity\AdType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parent', ChoiceType::class,
            [
                'label' => false,
                'choices' => 
                [
                    'Autopromotion' => 'Autopromotion',
                    'Promotion participative' => 'Promotion participative',
                ],
                'expanded' => true,
                'multiple' => false,
                'attr' =>
                [
                    'class' => 'form-check-inline',
                ],
            ])
            ->add('child', ChoiceType::class, 
            [
                'label' => false,
                'choices' => 
                [
                    'Accession classique' => 'Accession classique',
                    'Accession social' => 'Accession social',
                    'Locatif social' => 'Locatif social',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' => 
                [
                    'class' => 'form-check-inline',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdType::class,
        ]);
    }
}
