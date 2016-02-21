<?php

namespace Reservas\Bundle\ReservasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Reservas\Bundle\ReservasBundle\Entity\delegacion;
use Reservas\Bundle\ReservasBundle\Form\delegacionType;

/**
 * delegacion controller.
 *
 */
class delegacionController extends Controller
{

    /**
     * Lists all delegacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ReservasReservasBundle:delegacion')->findAll();

        return $this->render('ReservasReservasBundle:delegacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new delegacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new delegacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('delegacion_show', array('id' => $entity->getId())));
        }

        return $this->render('ReservasReservasBundle:delegacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a delegacion entity.
     *
     * @param delegacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(delegacion $entity)
    {
        $form = $this->createForm(new delegacionType(), $entity, array(
            'action' => $this->generateUrl('delegacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new delegacion entity.
     *
     */
    public function newAction()
    {
        $entity = new delegacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('ReservasReservasBundle:delegacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a delegacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:delegacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find delegacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReservasReservasBundle:delegacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing delegacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:delegacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find delegacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ReservasReservasBundle:delegacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a delegacion entity.
    *
    * @param delegacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(delegacion $entity)
    {
        $form = $this->createForm(new delegacionType(), $entity, array(
            'action' => $this->generateUrl('delegacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing delegacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ReservasReservasBundle:delegacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find delegacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('delegacion_edit', array('id' => $id)));
        }

        return $this->render('ReservasReservasBundle:delegacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a delegacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ReservasReservasBundle:delegacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find delegacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('delegacion'));
    }

    /**
     * Creates a form to delete a delegacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('delegacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
