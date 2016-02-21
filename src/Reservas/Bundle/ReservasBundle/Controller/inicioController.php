<?php

namespace Reservas\Bundle\ReservasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class inicioController extends Controller
{
    public function inicioAction()
    {
        return $this->render('ReservasReservasBundle:inicio:inicio.html.twig');
    }
}