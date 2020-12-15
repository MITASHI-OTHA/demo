<?php

namespace App\Form;

use App\Entity\Credit;
use App\Form\DataTransformer\StringToDateTransformer;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreditsType extends AbstractType
{
    private $transformer;

    public function __construct(StringToDateTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('begin', TextType::class, [
                "label" => "début",
                "attr" => ["class" => "js-datepicker"]
            ])
            ->add('end', TextType::class, [
                "label" => "date anniversaire",
                "attr" => ["class" => "js-datepicker"]
            ])
            ->add('payementMois', IntegerType::class)
        ;


        $builder
            ->get('begin')
            ->addModelTransformer($this->transformer);
        $builder
            ->get('end')
            ->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => Credit::class,
            'cascade_validation' => true,
            'attr' =>
                [
                    'novalidate' => 'novalidate'
                ],
        ]);
    }
}
