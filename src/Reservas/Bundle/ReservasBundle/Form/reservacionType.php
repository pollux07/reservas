<?php

namespace Reservas\Bundle\ReservasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class reservacionType extends AbstractType
{
        
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('origen', 'entity', array(
                'class' => 'ReservasReservasBundle:pais',
                'property' => 'pais',
                ))
            //->add('fechaReserva')
            ->add('fechaIda', 'date', array(
                    'widget' => 'single_text', 'required'=>true))
            ->add('noAdultos', 'choice', array(
                    'choices'  => array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10')
                ))
            ->add('noChild', 'choice', array(
                    'choices'  => array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10')
                ))
            //->add('precio')
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
