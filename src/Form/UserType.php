<?php

namespace App\Form;

use App\Entity\User;
use App\Form\RoleType;
use App\Form\UserContactInfosType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, 
            [
                'label' => 'Pseudo',
            ])
            ->add('nom')
            ->add('prenom',TextType::class,
            [
                'label' => 'Prénom',
            ])
            ->add('email')
            ->add('abonneNewsletter', ChoiceType::class, 
            [
                'label' => 'Abonné(e) à la Newsletter',
                'expanded' => true,
                'multiple' => false,
                'choices' =>
                [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('civilite', ChoiceType::class, 
            [
                'label' => 'Civilité',
                'attr'=> [
                    'class'=> 'form-check-inline'
                ],
                'choices' => 
                [
                    'Madame' => 'f',
                    'Monsieur' => 'm',
                ]
            ])
            ->add('userContactInfos', UserContactInfosType::class, 
            [
                'label' => false,
            ])
            ->add('userRoles', CollectionType::class, 
            [
                'label' => false,
                'entry_type' => RoleType::class,
                'entry_options' => ['label' => false],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' =>
            [
                'novalidate' => 'novalidate'
            ],
        ]);
    }
}
