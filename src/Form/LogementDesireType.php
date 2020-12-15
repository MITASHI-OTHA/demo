<?php

namespace App\Form;

use App\Entity\LogementDesire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class LogementDesireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' =>
                    [
                        'T1' => 'T1',
                        'T2' => 'T2',
                        'T3' => 'T3',
                        'T4' => 'T4',
                        'T5' => 'T5',
                        'T6 ou plus' => 'T6 ou plus',
                    ],
                "multiple" => true,
                "expanded" => true,
            ])
            // ->add('surface_desire', IntegerType::class, [
            // 	"empty_data" => 0,
            // ])
            ->add('surface_min', IntegerType::class, [
		            "empty_data" => 0,
            ])
            ->add('surface_max', IntegerType::class, [
	            "empty_data" => 0,
            ])
            ->add('enveloppe_max', IntegerType::class, [
	            "empty_data" => 0,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => LogementDesire::class,
        ]);
    }
}
