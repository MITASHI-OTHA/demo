<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\MediaAdsType;
use App\Form\AdProjectType;
use App\Form\AdActeursOperationType;
use App\Form\PresentationProjetType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\DataTransformer\StringToDateTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AdsType extends AbstractType
{
    private $transformer;

    public function __construct(StringToDateTransformer $transformer) 
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, 
            [
                'label' => 'Titre de l’annonce / Nom du projet *',
            ])
            ->add('typeProjet', AdProjectType::class,
            [
                'label' => 'Type de projet *',
                //'class' => AdProjectType::class,
            ])
            ->add('typologie', ChoiceType::class, 
            [
                'label' => 'Typologie *',
                'choices' => 
                [
                    'Logement collectif' => 'Logement collectif',
                    'Habitat intermédiaire' => 'Habitat intermédiaire',
                    'Maisons individuelles' => 'Maisons individuelles',
                    'Maisons en bande' => 'Maisons en bande',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' =>
                [
                    'class' => 'form-check-inline',
                ],
            ])
            ->add('nbreLogementsTotal', IntegerType::class, 
            [
                'label' => 'Nombre de logements total de l’opération *',
            ])
            ->add('nbreLogementsDispo', IntegerType::class, 
            [
                'label' => 'Nombre de logements disponibles *',
            ])
            ->add('typesLogementsDispo', ChoiceType::class, 
            [
                'label' => 'Typologies de logement disponibles *',
                'choices' => 
                [
                    'T1' => 'T1',
                    'T2' => 'T2',
                    'T3' => 'T3',
                    'T4' => 'T4',
                    'T5' => 'T5',
                    'T6 et plus' => 'T6 et plus',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' =>
                [
                    'class' => 'form-check-inline',
                ],
            ])
            ->add('prix', IntegerType::class, 
            [
                'label' => false,
            ])
            ->add('montage', TextType::class, 
            [
                'label' => 'Montage *',
            ])
            ->add('etatAvancementProjet', ChoiceType::class, 
            [
                'label' => 'État d’avancement du projet *',
                'choices' => 
                [
                    'Constitution du groupe' => 'Constitution du groupe',
                    'Programmation et conception du projet' => 'Programmation et conception du projet',
                    'Chantier' => 'Chantier',
                ],
                'expanded' => true,
                'multiple' => false,
                'attr' =>
                [
                    'class' => 'form-check-inline',
                ],
            ])
            ->add('dateLivraison', TextType::class, 
            [
                'label' => 'Date de livraison estimée *',
                'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('programmeGlobal', TextareaType::class, 
            [
                'label' => 'Programme global *',
                'attr' => 
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('servicesBiensMutualises', TextType::class, 
            [
                'label' => 'Services / biens mutualisés *',
            ])
            ->add('espacesCommunsInterieurs', TextType::class, 
            [
                'label' => 'Espaces communs intérieurs *',
            ])
            ->add('espacesCommunsExterieurs', TextType::class, 
            [
                'label' => 'Espaces commu,ns extérieurs *',
            ])
            ->add('espacesPrivesExterieurs', TextType::class, 
            [
                'label' => 'Espaces privés extérieurs *',
            ])
            ->add('presentationProjet', PresentationProjetType::class, 
            [
                'label' => false,
            ])
            ->add('photo1', MediaAdsType::class, 
            [
                'label' => false,
            ])
            ->add('photo2', MediaAdsType::class, 
            [
                'label' => false,
                'required' => false,
            ])
            ->add('photo3', MediaAdsType::class, 
            [
                'label' => false,
                'required' => false,
            ])
            ->add('enSavoirPlus', TextareaType::class, 
            [
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('ajouterLien', UrlType::class, 
            [
                'label' => 'Ajouter un lien',
                'attr' => 
                [
                    'placeholder' => 'https://example.fr',
                    'pattern' => 'https://.*',
                ],
            ])
            ->add('ajouterDocument', MediaAdsType::class, 
            [
                'label' => false,
                'required' => false,
            ])
            ->add('acteur1', AdActeursOperationType::class, 
            [
                'label' => false,
            ])
            ->add('actor', CollectionType::class,
            [
                'label' => false,
                'entry_type' => AdActeursOperationType::class,
                'allow_add' => true,
                'allow_delete' => true,

            ])
            ->add('mailModerator', EmailType::class, 
            [
                'label' => false,
                'attr' => [
                    'placeholder' => 'identifiant@exemple.fr',
                ]
            ])
            ->add('phoneModerator', TelType::class, 
            [
                'label' => false,
            ])
            ->add('modalitesCandidatureDesc', TextareaType::class, 
            [
                'label' => 'Description des modalités de candidature *',
                'attr' =>
                [
                    'class' => 'is__autogrow',
                ],
            ])
            ->add('typeFormCandidature', ChoiceType::class, 
            [
                'label' => 'Type du formulaire de candidature',
                'choices' => 
                [
                    'Formulaire simple' => 'Formulaire simple',
                    'Formulaire complet' => 'Formulaire complet',
                ],
                'expanded' => true,
                'multiple' => false,
                'attr' =>
                [
                    'class' => 'form-check-inline',
                ],
                
            ])
        ;
        $builder
        ->get('dateLivraison')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
        [
            'data_class' => Ad::class,
            'attr' => 
            [
                'novalidate' => 'novalidate',
            ]
        ]);
    }
}
