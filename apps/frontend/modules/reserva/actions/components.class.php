<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of components
 *
 * @author claudio
 */
class reservaComponents extends sfComponents {
  
  public function executeFormulario(sfWebRequest $request)
  {
    $this->frmReserva= new ReservaForm(array('habitaciones_deseadas' => (isset($this->habitacion)) ? $this->habitacion : null,
                                             'asunto' => '[FORM '.strtoupper($this->getUser()->getCulture()).'] '.(isset($this->asunto)) ? $this->asunto : 'Consulta o Reserva',
                                             'fecha_reserva' => array('from' => (isset($this->llegada)) ? $this->llegada : null, 
                                                                      'to' => (isset($this->salida)) ? $this->salida : null)));
  }
}

?>
