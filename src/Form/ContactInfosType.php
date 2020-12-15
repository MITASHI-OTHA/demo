<?php

namespace App\Form;

use App\Form\ImageType;
use App\Entity\ContactInfos;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ContactInfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('role', ChoiceType::class, 
            [
                'label' => 'Je suis',
                'choices' => 
                [
                    'Porteur de projet' => 'Porteur de projet',
                    'Futur habitant' => 'Futur habitant',
                    'Presse' => 'Presse',
                    'Autre' => 'Autre',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('email', EmailType::class, 
            [
                'label' => false,
            ])
            ->add('nom', TextType::class, 
            [
                'label' => 'Nom',
            ])
            ->add('prenom', TextType::class, 
            [
                'label' => 'Prénom',
            ])
            ->add('societe', TextType::class, 
            [
                'label' => 'Société',
            ])
            ->add('telephone', TextType::class, 
            [
                'label' => false,
            ])
            ->add('contactReason', ChoiceType::class, 
            [
                'label' => 'Je vous contacte pour :',
                'choices' => 
                [
                    'J’ai une question...' => 'J’ai une question...',
                    'J’ai un problème technique...' => 'J’ai un problème technique...',
                    'J’ai une proposition...' => 'J’ai une proposition...',
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('objet', TextType::class, 
            [
                'label' => 'Objet *',
            ])
            ->add('message', CKEditorType::class, 
            [
                'label' => 'Message *',
                'config' => 
                [
                    'toolbar' => 'contact_toolbar',
                ],
            ])
            ->add('file', ImageType::class, 
            [
                'label' => 'Avez-vous un document à nous faire parvenir ?',
            ])
            ->add('recaptchaToken', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactInfos::class,
            'attr' =>
            [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}
