<?php

namespace App\Form;

use App\Entity\AcquereurCandidature;
use App\Form\DataTransformer\StringToDateTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcquereurType extends AbstractType
{
    private $transformer;

    public function __construct(StringToDateTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 * @return void
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('gender', ChoiceType::class, [
                    'label' => 'Civilité *',
                    'choices' =>
                        [
                            'Monsieur' => 'm',
                            'Madame' => 'f',
                            'Autre ou ne souhaite pas répondre' => 'Autre',
                        ],
	            "expanded" => true,
	            'attr' =>
		            [
			            'class' => 'form-check-inline',
		            ],
                ])
	        ->add('lastname', TextType::class, [
		        "label" => "Nom*"
	        ])

            ->add('firstname', TextType::class, [
            	"label" => 'Prénom*'
            ])

            ->add('date_anniversaire', TextType::class, [
                "label" => "date de fin*",
                "attr" => ["class" => "js-datepicker"]
            ])

	        ->add('code_postal', TextType::class, [
	        	"label" => "Code postal*",
		        "attr" => ["class" => "code_postal_acquereur"],
	        ])

	        ->add('ville', TextType::class, [
	        	"label" => "Ville*",
		        "attr" => ["class" => "ville_acquereur"],
		        "empty_data" => ""
	        ])

	        ->add('addresse', TextType::class, [
		        "label" => "Addresse",
	        	"empty_data" => ""
	        ])

	        ->add('pays', TextType::class, [
				"label" => "Pays",
		        "empty_data" => ""
	        ])

            ->add('tel_mobile', NumberType::class, [
            	"label" => "Téléphone portable*"
            ])
            ->add('tel_fixe', NumberType::class, [
            	"label" => "Téléphone du domicile"
            ])
            ->add('tel_professional', NumberType::class, [
            	"label" => "Téléphone professionnel"
            ])

	        ->add('email', EmailType::class, [
		        "label" => "E-mail",
		        "empty_data" => ""
	        ])

	        ->add('financiaryProfessionalSituation', SituationProfessionnelFinanciereType::class, [
                "label" => "Situation Financière"
            ]);


        $builder
            ->get('date_anniversaire')
            ->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => AcquereurCandidature::class,
        ]);
    }
}
