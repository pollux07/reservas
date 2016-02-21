<?php

namespace Reservas\Bundle\ReservasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Reservas\Bundle\ReservasBundle\Entity\reservacion;
use Reservas\Bundle\ReservasBundle\Form\reservacionType;

/**
 * reservacion controller.
 *
 */
class reservacionController extends Controller
{

    /**
     * Lists all reservacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ReservasReservasBundle:reservacion')->findAll();

        return $this->render('ReservasReservasBundle:reservacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new reservacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new reservacion();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setFechaReserva(new \DateTime("now"));

            switch (variable) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

            $data = $request->request->get('reservas_bundle_reservasbundle_reservacion');
            $number1 = intval($data['noAdultos']);

            $data2 = $request->request->get('reservas_bundle_reservasbundle_reservacion');
            $number2 = intval($data2['noChild']);

            if ($number1 > 2 && $number2 > 1) {
                $total = $number1 + $number2;
            }

            $entity->setPrecio($total);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reservacion_show', array('id' => $entity->getId())));
        }

        return $this->render('ReservasReservasBundle:reservacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a reservacion entity.
     *
     * @param reservacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(reservacion $entity)
    {
        $form = $this->createForm(new reservacionType(), $entity, array(
            'action' => $this->generateUrl('reservacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new reservacion entity.
     *
     */
    public function newAction()
    {
        $entity = new reservacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('ReservasReservasBundle:reservacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:reservacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reservacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReservasReservasBundle:reservacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:reservacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reservacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReservasReservasBundle:reservacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a reservacion entity.
    *
    * @param reservacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(reservacion $entity)
    {
        $form = $this->createForm(new reservacionType(), $entity, array(
            'action' => $this->generateUrl('reservacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing reservacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:reservacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reservacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reservacion_edit', array('id' => $id)));
        }

        return $this->render('ReservasReservasBundle:reservacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a reservacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ReservasReservasBundle:reservacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find reservacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reservacion'));
    }

    /**
     * Creates a form to delete a reservacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
