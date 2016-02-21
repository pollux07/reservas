<?php

namespace Reservas\Bundle\ReservasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class delegacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pais')
            ->add('estado')
            ->add('delegacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Reservas\Bundle\ReservasBundle\Entity\delegacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'reservas_bundle_reservasbundle_delegacion';
    }
}
