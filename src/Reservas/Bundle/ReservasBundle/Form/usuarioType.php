<?php

namespace Reservas\Bundle\ReservasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class usuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese solo caracteres',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('apPat','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese solo caracteres',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('apMat','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese solo caracteres',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('correo', 'email', array(
                'required' => true,
                'invalid_message' => 'Ingrese un correo valido',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('telefono','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese Numeros Enteros',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('calle','text', array(
                'required' => true,
                'invalid_message' => 'IIngrese solo caracteres',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('noExt','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese Numeros Enteros',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('noInt','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese Numeros Enteros',
                'attr' => array(
                    'maxlength'=>15)))
            ->add('colonia','text', array(
                'required' => true,
                'invalid_message' => 'Ingrese solo caracteres',
                'attr' => array(
                    'maxlength'=>15)))
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
            'data_class' => 'Reservas\Bundle\ReservasBundle\Entity\usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'reservas_bundle_reservasbundle_usuario';
    }
}
