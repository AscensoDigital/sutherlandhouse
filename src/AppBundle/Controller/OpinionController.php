<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Opinion;
use AppBundle\Form\OpinionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class OpinionController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/opinion", name="opinion_index")
     */
    public function indexAction()
    {
        $opiniones=$this->getDoctrine()->getRepository(Opinion::class)->findBy([],['fecha' => 'DESC']);
        return $this->render('opinion/index.html.twig', ['opiniones' => $opiniones]);
    }


    public function formAction()
    {
        $form = $this->createForm(OpinionType::class);

        return $this->render('opinion/_opinion_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/opinion/new", name="opinion_new")
     * @Method("POST")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     */
    public function newAction(Request $request)
    {
        $opinion = new Opinion();
        $opinion->setUsuario($this->getUser());
        $opinion->setFecha(new \DateTime());

        $form = $this->createForm(OpinionType::class, $opinion);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($opinion);
            $entityManager->flush();

            return $this->redirectToRoute('opinion_index');
        }

        return $this->render('opinion/opinion_form_error.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Opinion $opinion
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/opinion/show/{id}", name="opinion_show")
     */
    public function showAction(Opinion $opinion) {
        return $this->render('opinion/show.html.twig',['opinion' => $opinion]);
    }
}
