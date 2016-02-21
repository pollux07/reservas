<?php

namespace Reservas\Bundle\ReservasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class reservacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('origen')
            ->add('fechaReserva')
            ->add('fechaIda')
            ->add('noAdultos')
            ->add('noChild')
            ->add('precio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Reservas\Bundle\ReservasBundle\Entity\reservacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'reservas_bundle_reservasbundle_reservacion';
    }
}
