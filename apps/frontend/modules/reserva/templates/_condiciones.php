<h2>Condiciones Generales</h2>
<ul>
<li><?php echo __('Tarifa en Dólares referenciales y aplicable para extranjeros no residentes en Chile con Factura de Exportación. Tarifa sujeta
a modificación sin previo aviso, dependiendo del tipo de cambio de cierre del mercado al momento de la reserva. Franquicia Tributaria (Exentos del pago de
Impuesto 19% IVA).')?></li>
<li><?php echo __('Las tarifas en pesos chilenos (CLP) incluyen IVA.')?></li>
<li><?php echo __('Valor por habitación simple o doble.')?></li>
<li><?php echo __('Horario de Check In desde las 15:00 hrs.')?></li>
<li><?php echo __('Horario de Check Out hasta las 12:00 hrs.')?></li>
<li><?php echo __('No incluye cama adicional.')?></li>
<li><?php echo __('Reservas limitadas a 9 habitaciones (capacidad máxima del Hotel).')?></li>
<li><?php echo __('No dispone de acceso para minusválidos.')?></li>
<li><?php echo __('No se aceptan mascotas.')?></li>
<li><?php echo __('Las dependencias del hotel son para no fumadores, solo en las terrazas se permite fumar.')?></li>
</ul>
<h2><?php echo __('Forma de Pago')?></h2>
<ul>
<li><?php echo __('Prepago del 50% al momento de la reserva, mediante pago efectivo, transferencia bancaria, tarjetas de crédito indicando su número y fecha de vencimiento.')?></li>
<li><?php echo __('Saldo se cancela en mesón de recepción del Hotel.') ?></li>
</ul>
<h2><?php echo __('Política de Cancelación')?></h2>
<p><?php echo __('Cancelación de reservas hasta con 48 horas de anticipación pasado ese plazo se cargará el valor del prepago realizado al momento de la reserva.')?> 
<?php echo __('No habrá reintegros ni devoluciones.') ?></p>
<h2><?php echo __('Información y Contacto') ?></h2>
<strong><?php echo __('Fono') ?>:</strong> (+56) 32-3196798<br/>
<strong>Email:</strong> <?php echo mail_to('contacto@sutherlandhouse.cl', 'contacto@sutherlandhouse.cl', array(),array('subject' => '[WEB '.strtoupper($sf_params->get('sf_culture')).' - Condiciones]'))?>