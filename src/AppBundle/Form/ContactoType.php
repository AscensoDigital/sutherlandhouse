<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')
            ->add('apellidos')
            ->add('email',RepeatedType::class, [
                'first_options'  => array('label' => 'Email'),
                'second_options' => array('label' => 'Repetir Email'),
            ])
            ->add('telefono',TextType::class,['required' => false])
            ->add('pais', CountryType::class, [
                'placeholder' => ''
            ])
            ->add('asunto',TextType::class)
            ->add('mensaje',TextareaType::class, [
                'attr' => ['rows'=> 8]
            ])
            ->add('origen',HiddenType::class, [
                'empty_data' => '/contacto',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'contacto';
    }
}
