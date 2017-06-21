<?php

namespace AppBundle\Form;

use AppBundle\Entity\Habitacion;
use AppBundle\Entity\Opinion;
use AscensoDigital\ComponentBundle\Form\Type\RatingType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpinionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('valorizacion', RatingType::class, ['label' => false])
            ->add('habitacion', EntityType::class, ['label' => 'Habitación', 'required' => false, 'class' => Habitacion::class])
            ->add('opinion', TextareaType::class, ['label' => 'Opinión' ])
            ->add('loMejor', TextareaType::class, ['attr' => ['rows' => 5], 'required' => false])
            ->add('porMejorar', TextareaType::class, ['attr' => ['rows' => 5], 'required' => false ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Opinion::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'ingresa_tu_opinion';
    }
}
