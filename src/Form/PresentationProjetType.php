<?php

namespace App\Form;

use App\Entity\AdPresentationProjet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PresentationProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('presentationOperation', TextareaType::class, 
            [
                'label' => 'Présentation de l’opération *',
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('pays', ChoiceType::class, 
            [
                'label' => 'Pays *',
                'choices' => 
                [
                    'France' => 'France',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('codePostal', IntegerType::class, 
            [
                'label' => 'Code postal *',
            ])
            ->add('ville', TextType::class, 
            [
                'label' => 'Ville *',
                //'choices' => [],
            ])
            ->add('adresse', TextareaType::class)
            ->add('presentationCommodites', TextareaType::class, 
            [
                'label' => 'Présentation de la ville, du quartier et de leurs commodités *',
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('presentationAmbitionsProjet', TextareaType::class, 
            [
                'label' => 'Présentation des valeurs et ambitions du projet, de la méthode de participation/co-conception prévue et des éléments sur lesquels elle portera *',
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdPresentationProjet::class,
        ]);
    }
}
