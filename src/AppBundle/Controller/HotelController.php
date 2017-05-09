<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Promocion;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HotelController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('hotel/index.html.twig');
    }

    public function carouselAction($pagina) {
        $em= $this->getDoctrine()->getManager();
        $pcs=$em->getRepository('AppBundle:PageCarousel')->findByPagina($pagina);
        return $this->render('hotel/carousel.html.twig',['pagina' => $pagina, 'pcs' => $pcs, 'urlBase' => $this->getParameter('app.path.carousel_images')]);
    }

    /**
     * @param Promocion $promocion
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/promocion/{slug}", name="hotel_promocion")
     * @ParamConverter("promocion", class="AppBundle:Promocion")
     */
    public function promocionAction(Promocion $promocion){
       return $this->render($promocion->getTemplate(),['promocion' => $promocion]);
    }

    public function promocionListAction(){
        $em= $this->getDoctrine()->getManager();
        $proms=$em->getRepository('AppBundle:Promocion')->doSelectActivos();
        return $this->render('hotel/promocionList.html.twig', ['proms' => $proms, 'urlBase' => $this->getParameter('app.path.promocion_images')]);
    }

    public function promocionPortadaAction(){
        $em= $this->getDoctrine()->getManager();
        $proms=$em->getRepository('AppBundle:Promocion')->doSelectPortada();
        return $this->render('hotel/promocionList.html.twig', ['proms' => $proms, 'urlBase' => $this->getParameter('app.path.promocion_images')]);
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
}
