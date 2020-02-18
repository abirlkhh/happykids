<?php

namespace ActiviteBundle\Form;

use ActiviteBundle\Entity\enfant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class parascolaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeParascolaire',ChoiceType::class,['choices'=>['CHOISISSEZ' => '','VISITE CULTUREL' => 'VISITE CULTUREL',  'EXCURSION' => 'EXCURSION','SORTIE EN NATURE' => 'SORTIE EN NATURE']])
                ->add('lieuParascolaire')
                ->add('dateDebutParascolaire')
                ->add('dateFinParascolaire')
                ->add('enfant',EntityType::class,array('class'=>enfant::class,'choice_label'=>'id'))
                ->add('ajouter',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ActiviteBundle\Entity\parascolaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'activitebundle_parascolaire';
    }


}
