<?php

namespace App\Form;

use App\Entity\Countries;
use App\Entity\UserContactInfos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserContactInfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('telephone')
            ->add('pays', EntityType::class, 
            [
                'class' => Countries::class,
                'choice_label' => 'name',
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('codePostal')
            ->add('ville', ChoiceType::class, 
            [
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('adresse', TextareaType::class)
            ->add('avatarFile', FileType::class, 
            [ 
                'label' => false,
                'required' => false,
                //'mapped' => false,
            ])
            ->add('entreprise')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserContactInfos::class,
        ]);
    }
}
