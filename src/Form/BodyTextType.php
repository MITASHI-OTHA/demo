<?php

namespace App\Form;

use App\Entity\BodyText;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BodyTextType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subTitle', TextType::class, 
            [
                'label' => false,
                'attr' => 
                [
                    'placeholder' => 'Sous titre du post',
                ],
            ])
            ->add('content', CKEditorType::class, 
            [
                'label' => false,
                'attr' => 
                [
                    'placeholder' => 'Contenu du post',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BodyText::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
