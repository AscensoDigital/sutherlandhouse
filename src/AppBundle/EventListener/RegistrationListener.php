<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09-06-17
 * Time: 16:47
 */

namespace AppBundle\EventListener;



use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegistrationListener
{
     public function onRegistrationSuccess(FormEvent $event){
        $request=$event->getRequest();
        if($request->get('referer')){
            $event->setResponse(new RedirectResponse($request->get('referer')));
        }
     }
}