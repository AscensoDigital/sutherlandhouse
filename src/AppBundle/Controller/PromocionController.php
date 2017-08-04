<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Promocion;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PromocionController extends Controller
{
    /**
     * @param Promocion $promocion
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/promocion/{slug}", name="hotel_promocion")
     * @ParamConverter("promocion", class="AppBundle:Promocion")
     */
    public function promocionAction(Promocion $promocion = null){
        if(is_null($promocion)){
            return $this->redirectToRoute('hotel_tarifa');
        }
        return $this->render($promocion->hasPromocionPage() ? $promocion->getTemplate() : 'promocion/show.html.twig',
                            ['promocion' => $promocion, 'urlBase' => $this->getParameter('app.path.promocion_images')]);
    }

    public function promocionListAction(){
        $em= $this->getDoctrine()->getManager();
        $proms=$em->getRepository('AppBundle:Promocion')->doSelectActivos();
        return $this->render('promocion/list.html.twig', ['proms' => $proms, 'urlBase' => $this->getParameter('app.path.promocion_images')]);
    }

    public function promocionPortadaAction(){
        $em= $this->getDoctrine()->getManager();
        $proms=$em->getRepository('AppBundle:Promocion')->doSelectPortada();
        return $this->render('promocion/list.html.twig', ['proms' => $proms, 'urlBase' => $this->getParameter('app.path.promocion_images')]);
    }
}
