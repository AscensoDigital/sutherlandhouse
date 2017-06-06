<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GaleriaController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/galerias", name="galeria_index")
     */
    public function indexAction() {
        $galerias=$this->getDoctrine()->getRepository('AppBundle:Galeria')->findBy([],['nombre' => 'ASC']);
        $ids=array();
        foreach ($galerias as $galeria){
            $ids[]=$galeria->getId();
        }
        return $this->render('galeria/index.html.twig',['galerias' => $galerias, 'ids' => $ids, 'urlBase' => $this->getParameter('app.path.galeria_muestra_images')]);
    }

    public function initAction($galerias_id = array())
    {
        $galerias=$this->getDoctrine()->getRepository('AppBundle:Galeria')->findBy(['id' => $galerias_id]);
        return $this->render('galeria/init.js.twig', ['galerias' => $galerias, 'urlBase' => $this->getParameter('app.path.galeria_images'), 'urlBaseMin' => $this->getParameter('app.path.galeria_miniatura_images')]);
    }
}
