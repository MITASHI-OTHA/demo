<?php

namespace App\Form;

use App\Entity\CandidatureLight;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatureLightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('tailleFoyer', IntegerType::class, [
            	"label" => "Taille logement"
            ])
            ->add('logementRecherche',ChoiceType::class, [
	                "label" => "types ",
	                'choices' => [
		                'T1' => 'T1',
		                'T2' => 'T2',
		                'T3' => 'T3',
		                'T4' => 'T4',
		                'T5' => 'T5',
		                'T6 ou plus' => 'T6 ou plus',

	                ],
	                "expanded" => true,
	                'attr' => [
			                'class' => 'form-check-inline',
		                ],
	                "empty_data" => "T1"
                    ])
            ->add('surfaceSouhaitee', IntegerType::class, [
            	"empty_data" => 0
            ])
            ->add('surfaceMin', IntegerType::class, [
	            "empty_data" => 0
            ])
            ->add('surfaceMax', IntegerType::class, [
	            "empty_data" => 0
            ])
            ->add('enveloppeMax', IntegerType::class, [
	            "empty_data" => 0
            ])
            ->add('motivation', TextType::class, [
            	"empty_data" => ""
            ])
	        ->add('checks', CheckboxType::class, [
		        "label" => "J’atteste sur l’honneur l’exactitude des informations renseignées dans le formulaire de candidature. 
                Je suis conscient(e) qu’un formulaire incomplet ou inexact pourrait donner lieu au rejet de ma candidature.",
		        'required' => true,
	        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => CandidatureLight::class,
	        'attr' =>
		        [
			        'novalidate' => 'novalidate'
		        ],
        ]);
    }
}
