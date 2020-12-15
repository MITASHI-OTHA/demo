<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeAccount', ChoiceType::class, 
            [
                'label' => 'Je crée un compte * :', 
                'choices' => 
                [
                    'Habitant' => 'Habitant',
                    'Porteur de projet' => 'Porteur de projet',
                ],
            ])
            ->add('civilite', ChoiceType::class, 
                [
                    'label' => 'Civilité *',
                    'choices' => 
                    [
                        'Monsieur' => 'm',
                        'Madame' => 'f',
                        'Autre'=> 'b'
                    ]
                ]
            )
            ->add('nom', TextType::class,
                [
                    'label' => "Nom *",
                    'attr' =>
                    [
                        'placeholder' => 'Nom *',
                    ],
                ]
            )
            ->add('prenom', TextType::class,
                [
                    'label' => "Prenom *",
                    'attr' =>
                    [
                        'placeholder' => 'Prénom *',
                    ],
                ]
            )
            ->add('username', TextType::class, 
                [
                    'label' => "Pseudo",
                    'attr' =>
                    [
                        'class' => 'password-field',
                        'placeholder' => 'Pseudo *',
                    ],
                ]
            )
            ->add('email', EmailType::class,
                [
                    'label' => "Email",
                    'attr' =>
                    [
                        'placeholder' => 'Email *',
                    ],
                ]
            )
            ->add('password', RepeatedType::class, 
            [
                'type' => PasswordType::class,
                'first_options'  => 
                [
                    'label' => "Mot de passe",
                    'attr' =>
                    [
                        'placeholder' => 'Mot de passe *',
                    ],
                ],
                'second_options' => 
                [
                    'label' => "Confirmer le mot de passe",
                    'attr' =>
                    [
                        'placeholder' => 'Confirmation du mot de passe *',
                    ],
                ],
                'invalid_message' => 'Les deux mots de passe doivent être identiques',
                'options' => 
                [
                    'attr' => 
                    [
                        'class' => 'password-field'
                    ]
                ],
                'required' => true,
            ])
            ->add('abonneNewsletter', CheckboxType::class, 
            [
                'required' => false,
                'label' => 'En cochant cette case, j\'accepte de recevoir la newsletter de Mycityzy.',
            ])
            ->add('cguAccepted', CheckboxType::class, 
            [
                'label' => false,
            ])
            ->add('recaptchaToken', HiddenType::class)
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
