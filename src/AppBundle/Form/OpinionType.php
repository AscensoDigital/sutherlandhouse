<?php

namespace AppBundle\Form;

use AppBundle\Entity\Habitacion;
use AppBundle\Entity\Opinion;
use AscensoDigital\ComponentBundle\Form\Type\RatingType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpinionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('valorizacion', RatingType::class, ['label' => false, 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o'])
            ->add('valorPersonal', RatingType::class, ['label' => 'Personal', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('valorHabitacion', RatingType::class, ['label' => 'Habitación', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('valorDescanso', RatingType::class, ['label' => 'Calidad Descanso', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('valorDesayuno', RatingType::class, ['label' => 'Desayuno', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('valorLimpieza', RatingType::class, ['label' => 'Limpieza', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('valorInstaServ', RatingType::class, ['label' => 'Instalaciones y Servicios', 'rating_icon_base' => 'fa-circle-o', 'rating_icon_check' => 'fa-dot-circle-o', 'rating_label_empty' => '', 'required' => false])
            ->add('habitacion', EntityType::class, ['label' => 'Habitación', 'required' => false, 'class' => Habitacion::class])
            ->add('pais', CountryType::class, ['label' => 'País Residencia', 'placeholder' => ''])
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
