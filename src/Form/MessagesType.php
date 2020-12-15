<?php

namespace App\Form;

use App\Entity\AdMessages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, 
            [
                'label' => 'Votre message',
                'attr' => 
                [
                    'rows' => 8,
                    'placeholder' => 'Bonjour, ce bien est-il toujours disponible ?'
                ]
            ])
            ->add('imageFileMessage', VichImageType::class, 
            [
                'label' => false,
                'required' => false,
                'attr' => 
                [
                    'accept' => 'image/*, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdMessages::class,
            'attr' => [
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}
