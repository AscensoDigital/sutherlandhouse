<?php

/**
 * reserva actions.
 *
 * @package    hotel
 * @subpackage reserva
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reservaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->frmReserva= new ReservaForm(array('habitaciones_deseadas' => $request->getParameter('habitacion', null), 'asunto' => '[FORM '.strtoupper($this->getUser()->getCulture()).'] Consulta o Reserva'));
    $this->galeria=Hotel::getGaleria('hotel');
    if($request->getMethod()==sfRequest::POST)
    {
      $this->processForm($request, $this->frmReserva);
    }
  }
  
  public function executeGracias()
  {
    $this->galeria=Hotel::getGaleria('hotel');
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter('reserva'));

    if($form->isValid())
    {
      sfContext::getInstance()->getConfiguration()->loadHelpers('Partial');
      $this->getMailer()->composeAndSend($form->getValue('email'), 'reservas@sutherlandhouse.cl', 
                                         $form->getValue('asunto'), get_partial('reserva/correo', array('valores' => $form->getValues())));
      return $this->redirect(array('module'=> 'reserva', 'action' => 'gracias', 'nombre' => $form->getValue('nombre_completo')));
    }
  }
}
