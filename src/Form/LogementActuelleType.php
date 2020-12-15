<?php

namespace App\Form;

use App\Entity\LogementActuel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogementActuelleType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
	{
		$builder
			->add('types', ChoiceType::class, [
				"label" => "types logement",
				'choices' => [
					'T1' => 'T1',
					'T2' => 'T2',
					'T3' => 'T3',
					'T4' => 'T4',
					'T5' => 'T5 ou plus',
				],
				"expanded" => true,
				'attr' =>
					[
						'class' => 'form-check-inline',
					],
			])
			->add('statuts', ChoiceType::class, [
				"label" => "status logement",
				'choices' => [
					'Locataire du parc privé' => 'locataire du parc prive',
					'Propriétaire occupant' => 'Proprietaire occupant',
					'Locataire HLM' => 'Locataire HLM',
					'Autre (veuillez précisez):' => null,
				],
				"expanded" => true,
				'attr' =>
					[
						'class' => 'form-check-inline',
					],
			])
			->add('taille', IntegerType::class, [
				"label" => "taille du foyer",
				"empty_data" => 0
			]);
	}

	public function configureOptions(OptionsResolver $resolver) : void
	{
		$resolver->setDefaults([
			'data_class' => LogementActuel::class,
			'attr' =>
				[
					'novalidate' => 'novalidate'
				],
		]);
	}
}
