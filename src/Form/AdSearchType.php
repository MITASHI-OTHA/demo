<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeProjet', ChoiceType::class, 
            [
                'placeholder' => 'Quel type de projet cherchez-vous ?',
                'choices' =>
                [
                    'Autopromotion' => 'Autopromotion',
                    'Promotion participative' => 'Promotion participative',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('typologie', ChoiceType::class, 
            [
                'label' => 'Type d’habitat',
                'placeholder' => 'Quel type d\'habitation cherchez-vous ?',
                'choices' =>
                [
                    'Logement collectif' => 'Logement collectif',
                    'Habitat intermédiaire' => 'Habitat intermédiaire',
                    'Maisons individuelles' => 'Maisons individuelles',
                    'Maisons en bande' => 'Maisons en bande',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('etatAvancementProjet', ChoiceType::class, 
            [ 
                'label' => 'Phase',
                'placeholder' => 'À quelle Phase ?',
                'choices' =>
                [
                    'Constitution du groupe' => 'Constitution du groupe',
                    'Programmation et conception du projet' => 'Programmation et conception du projet',
                    'Chantier' => 'Chantier',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('ville', TextType::class, 
            [
                'label' => 'Localisation',
                'attr' =>
                [
                    'placeholder' => 'Dans quelle ville ?',
                ], 
            ])
            ->add('dateLivraison', DateType::class, 
            [
                'label' => false,
                'placeholder' => 
                [
                    'year' => 'Date de livraison '
                ],
                'html5' => false,
                'format' => 'dd MM yyyy',
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'attr' =>
            [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}