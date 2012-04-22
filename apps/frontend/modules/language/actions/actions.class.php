<?php

/**
 * language actions.
 *
 * @package    hotel
 * @subpackage language
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class languageActions extends sfActions
{
  public function executeChangeLanguage(sfWebRequest $request)
  {
    $this->getUser()->setCulture($request->getParameter('new_language'));
    $this->redirectIf('hotel'==$request->getParameter('modulo') && 'index'==$request->getParameter('accion'),'@hotel_homepage');
    $this->redirect('@'.$request->getParameter('modulo').('index'!=$request->getParameter('accion') ? '_'.sfInflector::underscore($request->getParameter('accion')) : ''));
  }
}
