<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class OpinionExpressType extends OpinionType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', TextType::class);
        parent::buildForm($builder,$options);
    }

    public function getBlockPrefix()
    {
        return 'opinion_express';
    }
}
