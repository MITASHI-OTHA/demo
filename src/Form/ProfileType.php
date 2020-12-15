<?php

namespace App\Form;

use App\Entity\User;
use App\Form\UserContactInfosType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, 
            [
                'label' => 'Pseudo',
            ])
            ->add('nom')
            ->add('prenom', TextType::class, 
            [
                'label' => 'Prénom',
            ])
            ->add('email', EmailType::class)
            ->add('abonneNewsletter', ChoiceType::class, 
            [
                'label' => 'Abonné(e) à la Newsletter',
                'choices' => 
                [
                    'Oui' => true,
                    'Non' => false,
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('civilite', ChoiceType::class, 
            [
                'label' => 'Civilité',
                'choices' => 
                [
                    'Madame' => 'f',
                    'Monsieur' => 'm',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('userContactInfos', UserContactInfosType::class, 
            [
                'label' => 'Coordonnées',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
