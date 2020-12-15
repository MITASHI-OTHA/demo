<?php

namespace App\Form;

use App\Entity\ResponseMessageCandidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResponseMessageCandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Contents', TextareaType::class)

            ->add('LogementActuel', CheckboxType::class, [
            	"empty_data" => 0
            ])

            ->add('LogementDesire', CheckboxType::class, [
	            "empty_data" => 0
            ])

            ->add('Acquereur', CheckboxType::class, [
	            "empty_data" => 0
            ])

            ->add('Credits', CheckboxType::class, [
	            "empty_data" => 0
            ])

            ->add('Motivation', CheckboxType::class, [
	            "empty_data" => 0
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResponseMessageCandidature::class,
	        'attr' =>
		        [
			        'novalidate' => 'novalidate'
		        ],
        ]);
    }
}
