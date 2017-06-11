<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HotelController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $galerias=$this->getDoctrine()->getRepository('AppBundle:Galeria')->findBy(['portada' => true],['prioridad' => 'ASC']);
        $ids=array();
        foreach ($galerias as $galeria){
            $ids[]=$galeria->getId();
        }
        return $this->render('hotel/index.html.twig', ['galerias' => $galerias, 'ids' => $ids, 'urlBase' => $this->getParameter('app.path.galeria_muestra_images')]);
    }

    public function carouselAction($pagina) {
        $em= $this->getDoctrine()->getManager();
        $pcs=$em->getRepository('AppBundle:PageCarousel')->findByPagina($pagina);
        return $this->render('hotel/carousel.html.twig',['pagina' => $pagina, 'pcs' => $pcs, 'urlBase' => $this->getParameter('app.path.carousel_images')]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/eco-amigable", name="hotel_eco")
     */
    public function ecoAmigableAction() {
        return $this->render('hotel/eco_amigable.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/preguntas-frecuentes", name="hotel_faq")
     */
    public function faqAction() {
        $em= $this->getDoctrine()->getManager();
        $faqs=$em->getRepository('AppBundle:Faq')->doSelectSort();
        return $this->render('hotel/pregunta-frecuente.html.twig', ['faqs' => $faqs]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/habitaciones", name="hotel_habitacion_list")
     */
    public function habitacionListAction() {
        $ths=$this->getDoctrine()->getRepository('AppBundle:HabitacionTipo')->findAll();
        $galerias=array();
        foreach ($ths as $th) {
            if($th->getGaleria()){
                $galerias[]=$th->getGaleria()->getId();
            }
        }
        return $this->render('hotel/habitacion-list.html.twig',['habitaciones' => $ths, 'urlBase' => $this->getParameter('app.path.habitacion_tipo_images'), 'galerias' => $galerias]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/quienes-somos", name="hotel_quienes_somos")
     */
    public function quienesSomosAction() {
        return $this->render('hotel/quienes-somos.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/reserve-ahora", name="hotel_reserve")
     */
    public function reservarAction() {
        return $this->render('hotel/reserva.html.twig');
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/tarifas-promociones", name="hotel_tarifa")
     */
    public function tarifaAction() {
        $em= $this->getDoctrine()->getManager();
        $tmps= $em->getRepository('AppBundle:Temporada')->doSelectByActiva();
        return $this->render('hotel/tarifa.html.twig', ['tmps' => $tmps]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/valparaiso", name="hotel_valparaiso")
     */
    public function valparaisoAction() {
        return $this->render('hotel/valparaiso.html.twig');
    }
}
