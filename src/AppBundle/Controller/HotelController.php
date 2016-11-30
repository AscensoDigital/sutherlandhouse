<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PageCarousel;
use AppBundle\Entity\Promocion;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
       return $this->render();
    }
}
