<?php

/**
 * hotel actions.
 *
 * @package    hotel
 * @subpackage hotel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class hotelActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    if (!$request->getParameter('sf_culture'))
    {
      if ($this->getUser()->isFirstRequest())
      {
        $culture = $request->getPreferredCulture(array('es', 'en', 'fr'));
        $this->getUser()->setCulture($culture);
        $this->getUser()->isFirstRequest(false);
      }
      else
      {
        $culture = $this->getUser()->getCulture();
      }

      $this->redirect('@localized_hotel_homepage');
    }
  }
  
  public function executeComentario()
  {
    $this->galeria=Hotel::getGaleria('hotel');
  }
  
  public function executeDesayuno()
  {
   $this->galeria=Hotel::getGaleria('desayuno');
  }
  
  public function executeFaq()
  {
    $this->galeria=Hotel::getGaleria('habitaciones');
  }
  
  public function executeHabitacion()
  {
    $this->galeria=Hotel::getGaleria('habitaciones');
  }
  
  public function executeHistoria()
  {
    $this->galeria=Hotel::getGaleria('historia');
  }
  
  public function executeHotel()
  {
    $this->galeria=Hotel::getGaleria('hotel');
  }
  
  public function executeNewYear()
  {
    $this->galeria=Hotel::getGaleria('newyear');
  }
  
  public function executeNoticia()
  {
    $this->galeria=Hotel::getGaleria('habitaciones');
  }
  
  public function executePaseo()
  {
    $this->galeria=Hotel::getGaleria('paseos');
  }
  
  public function executeQuienesSomos()
  {
    $this->galeria=Hotel::getGaleria('quienessomos');
  }
  
  public function executeServicio()
  {
    $this->galeria=Hotel::getGaleria('hotel');
  }
  
  public function executeUbicacion()
  {
    $this->galeria=Hotel::getGaleria('historia');
  }
  
  public function executeValparaiso()
  {
    $this->galeria=Hotel::getGaleria('valparaiso');
  }
}
