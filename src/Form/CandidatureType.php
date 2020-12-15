<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('LogementActuel', LogementActuelleType::class)
            ->add('logementDesire', LogementDesireType::class)
            ->add('acquereur', AcquereurType::class)
	        ->add('acquereurs', CollectionType::class, [
		        "label" => false,
		        'entry_type' => AcquereurType::class,
		        "allow_add" => true,
		        "allow_delete" => true,
		        "prototype" => true,
		        "by_reference" => false,
	        ])

	        ->add('credits', CollectionType::class, [
		        "label" => false,
		        'entry_type' => CreditsType::class,
		        "allow_add" => true,
		        "allow_delete" => true,
		        "prototype" => true,
		        "by_reference" => false,
	        ])

	        ->add('motivationParticipation', MotivationParticipationType::class, [
            	"label" => "Mon intérêt pour l’habitat participatif",
            ])

            ->add('checks', CheckboxType::class, [
                "label" => "J’atteste sur l’honneur l’exactitude des informations renseignées dans le formulaire de candidature. 
                Je suis conscient(e) qu’un formulaire incomplet ou inexact pourrait donner lieu au rejet de ma candidature.",
                'required' => true,
            ]);

    }

	public function getName() : string
	{
		return 'Candidature';
	}

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
//            'data_class' => Candidature::class,
            'attr' =>
                [
                    'novalidate' => 'novalidate'
                ],
	        'empty_data' => true
        ]);
    }
}
