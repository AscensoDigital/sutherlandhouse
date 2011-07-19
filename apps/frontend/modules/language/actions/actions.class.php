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
    $this->redirect('@'.$request->getParameter('modulo').'_'.($request->getParameter('accion')=='index' ? 'homepage' : $request->getParameter('accion')));
  }
}
