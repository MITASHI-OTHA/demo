<?php

namespace App\Form;

use App\Entity\MotivationParticipation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MotivationParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('motivation', TextareaType::class, [
            	"label" => "Quelles sont vos motivations pour participer à un projet d’habitat participatif ?",
	            "empty_data" => ""
            ])
            ->add('vie_quartier', TextareaType::class, [
            	"label" => "Comment envisagez-vous la vie de voisinage ou la vie de quartier ?",
	            "empty_data" => ""
            ])
            ->add('echange_mutualisation', TextareaType::class, [
            	"label" => " Quels échanges, mutualisations ou espaces partagés souhaiteriez-vous mettre en place ?",
	            "empty_data" => ""
            ])
            ->add('connaissance_annonce', TextareaType::class, [
            	"label" => "Comment avez-vous connu ce projet ? ",
	            "empty_data" => ""
            ]);
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => MotivationParticipation::class,
        ]);
    }
}
