<?php

namespace App\Form;

use App\Entity\Post;
use App\Form\BodyTextType;
use App\Form\PostCategoriesType;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, 
            [
                'label' => 'Titre',
            ])
            ->add('chapeau', CKEditorType::class, 
            [
                'label' => 'Chapeau',
            ])
            ->add('category', PostCategoriesType::class, 
            [
                'label' => 'Catégorie',
            ])
            ->add('contents', CollectionType::class, 
            [
                'label' => false,
                'entry_type' => BodyTextType::class,
                'allow_add' => true,
                'allow_delete' => true,
            ])
            ->add('images', CollectionType::class, 
            [
                'label' => false,
                'entry_type' => ImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
