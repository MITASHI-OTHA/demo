<?php

namespace App\Form;

use App\Entity\SituationProfessionnelFinanciere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SituationProfessionnelFinanciereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('statusEmploi', ChoiceType::class, [
                'label' => "status d'emploi",
                'choices' =>
                    [
                        'CDI' => 'CDI',
                        'CDD' => 'CDD',
                        'intérim' => 'intérim',
                        'travailleurs indépendants' => 'travailleur independants',
                        'retraité' => 'retraite',
                        'autre' => 'autre',
                    ],
	            "expanded" => true
            ])
            ->add('salaireMoyen', IntegerType::class, [
                'label' => "Salaire mensuel moyen (total annuel net primes incluses divisé par 12)*",
                'attr' => [
                    'placeholder' => 0
                ]
            ])

            ->add('apportPersonnel', IntegerType::class, [
                'label' => "apport personnel",
                "attr" => [
                    'placeholder' => 0
                ]
            ])
            ->add('avisImposition', IntegerType::class, [
                "label" => "Revenus imposables d’après l’avis d’imposition 2020 sur les revenus de l’année 2019 
                (revenu fiscal de référence tel qu’indiqué sur votre avis d’imposition après l’abattement de 10 %) ",
                "attr" => [
                    'placeholder' => 0
                ]
            ])
            ->add('autresRevenus', IntegerType::class, [
                "label" => "Autres Revenus",
                "attr" => [
                    'placeholder' => 0
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => SituationProfessionnelFinanciere::class,
        ]);
    }
}
