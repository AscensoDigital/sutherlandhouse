<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservaForm
 *
 * @author claudio
 */
class ReservaForm extends sfForm {
  private static $formas_pago = array('Efectivo' => 'Efectivo',
                                      'Tarjeta de Crédito' => 'Tarjeta de Crédito',
                                      'Transferencia Bancaria' => 'Transferencia Bancaria');
  
  private static $habitaciones = array( "303" => 303,
                                        "201" => 201,
                                        "301" => 301,
                                        "302" => 302,
                                        "304" => 304,
                                        "202" => 202,
                                        "101" => 101,
                                        "203" => 203,
                                        "204" => 204);
  
  public function __construct($defaults = array(), $options = array(), $CSRFSecret = null) {
    parent::__construct($defaults, $options, $CSRFSecret);
  }
  
  public function configure()
  {
    $this->setWidgets(array(
      'nombre_completo'   => new sfWidgetFormInputText(array(),array('size' => 26)),
      'email'   => new sfWidgetFormInputText(array(),array('size' => 26)),
      'teléfono'   => new sfWidgetFormInputText(array(),array('size' => 20)),
      'fecha_reserva' => new sfWidgetFormDateRange(array(
                              'from_date' => new sfWidgetFormI18nDate(array('culture' => sfContext::getInstance()->getUser()->getCulture(),
                                                                            'years' => array_combine( range(date('Y'), date('Y')+3), range(date('Y'), date('Y')+3)))),
                              'to_date'   => new sfWidgetFormI18nDate(array('culture' => sfContext::getInstance()->getUser()->getCulture(),
                                                                            'years' => array_combine(range(date('Y'), date('Y')+3),range(date('Y'), date('Y')+3)))),
                              'template' => 'Llegada: %from_date% <br/>Salida: %to_date%'
                             )),
      'país' => new sfWidgetFormI18nChoiceCountry(array('add_empty' => true)),
      'habitaciones_deseadas' => new sfWidgetFormChoice(array('choices' => self::$habitaciones, 
                                                              'expanded' => true,
                                                              'multiple' => true,
                                                              'renderer_options' => array(
                                                                        'formatter' => array('Hotel', 'formatterChoiceInTd'),
                                                                        'label_separator' => '<br/>'))),
      'cantidad_adultos' => new sfWidgetFormInputText(),
      'cantidad_niños' => new sfWidgetFormInputText(),
      'forma_pago' => new sfWidgetFormChoice(array('choices' => array_merge(array('' => ''),self::$formas_pago))),
      'información_adicional' => new sfWidgetFormTextarea(),
      'asunto' => new sfWidgetFormInputHidden()
    ));
    $this->widgetSchema->setHelp('información_adicional', 'Ingrese cualquier información adicional que Ud. considere relevante.');
    $this->widgetSchema->setHelp('teléfono', 'Ej: 56-32-3196798');
    $this->widgetSchema->setNameFormat('reserva[%s]');
    
    $this->setValidators(array(
        'nombre_completo' => new sfValidatorString(array('min_length' => 3)),
        'email'   => new sfValidatorEmail(),
        'teléfono'   => new sfValidatorRegex(array('pattern' => '/^(\d{1,3}\-){1,2}\d{6,7}$/','required' => false)),
        'fecha_reserva' => new sfValidatorDateRange(array('from_date' => new sfValidatorDate(array('min' => date('Y-m-d')), array('min' => 'Llegada no válida.')),
                                                          'to_date'   => new sfValidatorDate(),), 
                                                    array('invalid' => 'Llegada debe ser Anterior a Salida.')),
        'país' => new sfValidatorI18nChoiceCountry(),
        'habitaciones_deseadas' => new sfValidatorChoice(array('choices' => array_keys(self::$habitaciones),'multiple' => true)),
        'cantidad_adultos' => new sfValidatorInteger(),
        'cantidad_niños' => new sfValidatorInteger(array('required' => false)),
        'forma_pago' => new sfValidatorChoice(array('choices' => array_keys(self::$formas_pago))),
        'información_adicional' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
        'asunto' => new sfValidatorString(),
    ));
    $this->disableLocalCSRFProtection();
  }
}

?>
