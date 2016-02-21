<?php

namespace Reservas\Bundle\ReservasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class vuelosController extends Controller
{
    public function opcsAction()
    {
        return $this->render('ReservasReservasBundle:vuelos:vuelos.html.twig');
    }

    public function acaAction()
    {
        return $this->render('ReservasReservasBundle:vuelos:opcion1.html.twig');
    }

    public function canAction()
    {
        return $this->render('ReservasReservasBundle:vuelos:opcion2.html.twig');
    }

    public function cabosAction()
    {
        return $this->render('ReservasReservasBundle:vuelos:opcion3.html.twig');
    }
}