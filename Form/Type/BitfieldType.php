<?php

namespace ColinFrei\BitFieldTypeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use ColinFrei\BitFieldTypeBundle\Form\DataTransformer\BitfieldToArrayTransformer;

class BitfieldType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new BitfieldToArrayTransformer());
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'bitfield';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'expanded' => true,
                'multiple' => true
            )
        );
    }
}
