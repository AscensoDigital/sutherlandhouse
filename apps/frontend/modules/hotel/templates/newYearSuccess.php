<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('Promoción Año Nuevo %year% en el Mar - Hotel Boutique Sutherland House Valparaíso, Chile',array('%year%' => date('Y')+1)))?>
<?php slot('keywords', __("promoción año nuevo en el mar valparaíso, fuegos articiales, juegos artificiales borde costero, año nuevo %year% hotel, reserva año nuevo %year%", array('%year%' => date('Y')+1)))?>
<?php slot('description', __("Reserva tu habitación en el hotel boutique sutherland house para el programa de año nuevo en el mar %year% de valparaíso donde verás uno de los espectáculos pirotecnicos más espectaculares del mundo.", array('%year%' => date('Y')+1)))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'newyear', 'title' => 'Año Nuevo', 'imagenes' => $galeria)))?>
<h2><?php echo __('Año Nuevo %year% en Hotel Boutique Sutherland House<br/>4 días - 3 noches, para 2 personas', array('%year%' => date('Y')+1))?></h2>
<p><?php echo __('Programa incluye 3 noches y 4 días de alojamiento desde el 29 de Diciembre 2012 hasta el 01 de Enero de 2013 para 2 personas.')?></p>
<h3>29 <?php echo __('de diciembre')?>:</h3>
<p><b>15 <?php echo __('horas')?>:</b> Check in.<br/>
  Welcome Drink<br/>
<p><b>18 <?php echo __('horas')?>:</b> Asado de bienvenida<br/>
- <?php echo __('Sutherland Sour.')?><br/>
- <?php echo __('Degustación de vinos "Selección Vinoteca".')?><br/>
- <?php echo __('Brochetas "Selección de carnes".')?><br/>
- <?php echo __('Salad bar.')?><br/>
- <?php echo __('Bebidas.')?><br/>
- <?php echo __('Cerveza artesanal.')?><br/>
<h3>30 <?php echo __('de diciembre')?>:</h3>
<p><b>8.30 a 11.30:</b> <?php echo __('Desayuno buffet.')?><br/>
  <b>14 <?php echo __('horas')?>:</b> <?php echo __('Almuerzo, Aperitivos, Antipastos, Vinos.')?><br/>
  <b>18 <?php echo __('horas')?>:</b> <?php echo __('Caminata por sector patrimonial.')?><br/>
  <b>20 <?php echo __('horas')?>:</b> <?php echo __('Paseo en Lancha por la costa de Valparaíso.')?></p>
  <b>21 <?php echo __('horas')?>:</b> <?php echo __('Cocktail.')?></p>
<h3>31 <?php echo __('de diciembre')?>:</h3>
<p><b>8.30 a 11.30:</b> <?php echo __('Desayuno buffet.')?><br/>
  <b>21 <?php echo __('horas')?>:</b> <?php echo __('Cena "MAR y TIERRA"')?><br/>
<h4><?php echo __('SALAD BAR Y ENTRADAS')?></h4>
- <?php echo __('Tres Ceviches "Pulpo, Salmon y Camarones"')?><br/>
- <?php echo __('Minichupes de Centolla')?><br/>
- <?php echo __('Ensaladas')?><br/>
- <?php echo __('Quesos y Jamones')?><br/>
<h4><?php echo __('PLATOS PRINCIPALES')?></h4>
- <?php echo __('Filete en salsa de setas')?><br/>
- <?php echo __('Congrio colorado en salsa de mariscos')?><br/>
- <?php echo __('Pavo a la mostaza')?><br/>
<h4><?php echo __('GUARNICIONES')?></h4>
- <?php echo __('Rissoto Parmesano')?><br/>
- <?php echo __('Fetuccini al pesto o Carbonara')?><br/>
- <?php echo __('Gratín de papas y Champiñones')?><br/>
<h4><?php echo __('BARRA DE POSTRES')?></h4><br/>
  <b>23.50 <?php echo __('horas')?>:</b> <?php echo __('Botella de Champaña en la habitación.')?></p>
<h3>1 <?php echo __('de Enero')?></h3>
<p><b><?php echo __('Desde 00.30 horas')?>:</b> <?php echo __('Fiesta de espumosos, DJ, cotillón y bar abierto "Etiquetas negras".')?><br/>
  <b>03 <?php echo __('horas')?>:</b> <?php echo __('Consomé y tapaditos.')?><br/>
  <b>05.30 <?php echo __('horas')?>:</b> <?php echo __('Término de evento.')?><br/>
  <b>"<?php echo __('Sorteo de una noche de alojamiento para un fin de semana en habitación con terraza')?>."</b><br/>
  <b>09 a 13 <?php echo __('horas')?>:</b> "Bloody Mary" <?php echo __('Brunch desayuno almuerzo.')?><br/>
<b>16 <?php echo __('horas')?>:</b> Check out.</p>
<?php $tarifas=sfConfig::get('app_tarifa_new_year')?>
<h2><?php echo __('Habitaciones')?> <?php if($tarifas):?><?php echo __('y Valores de Promoción')?><?php endif?></h2>
<table id="habitacion">
<tbody><tr>
<td><?php echo upload_tag('habitacion/habitacion 303 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 303 - Suite King Corner')))?><br/><b><?php echo __('Habitación 303 - Suite King Corner')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.450.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 303 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 303'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 303</b><br/><a href="http://www.facebook.com/album.php?aid=26817&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 201 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 201 - Suite King con Terraza')))?><br/><b><?php echo __('Habitación 201 - Suite King con Terraza')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.450.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 201 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 201'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 201</b><br/><a href="http://www.facebook.com/album.php?aid=26570&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 301 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 301 - Suite King Panoramic')))?><br/><b><?php echo __('Habitación 301 - Suite King Panoramic')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.450.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 301 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 301'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 301</b><br/><a href="http://www.facebook.com/album.php?aid=26637&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 302 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 302 - Suite Romantic')))?><br/><b><?php echo __('Habitación 302 - Suite Romantic')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.350.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 302 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 302'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 302</b><br/><a href="http://www.facebook.com/album.php?aid=26639&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 304 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 304 - Suite')))?><br/><b><?php echo __('Habitación 304 - Suite')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.350.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 304 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 304'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 304</b><br/><a href="http://www.facebook.com/album.php?aid=26831&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 101 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 101 - Suite')))?><br/><b><?php echo __('Habitación 101 - Suite')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.350.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 101 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 101'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 101</b><br/><a href="http://www.facebook.com/album.php?aid=26567&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 202 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 202 - Suite')))?><br/><b><?php echo __('Habitación 202 - Suite')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.190.000 <b>*</b><?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 202 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 202'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 202</b><br/><a href="http://www.facebook.com/album.php?aid=26577&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 203 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 203 - Doble')))?><br/><b><?php echo __('Habitación 203 - Doble')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.190.000<?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 203 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 203'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 203</b><br/><a href="http://www.facebook.com/album.php?aid=26589&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 204 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 204 - Doble')))?><br/><b><?php echo __('Habitación 204 - Doble')?></b><br/><?php if($tarifas):?><?php if(false):?><strong style="color: red;"><?php echo __('RESERVADA')?></strong><?php else:?><?php echo __('Valor Promoción')?>: $ 1.190.000 <b>*</b><?php endif?><?php endif?></td>
<td><?php echo upload_tag('habitacion/habitacion 204 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 204'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 204</b><br/><a href="http://www.facebook.com/album.php?aid=26591&amp;id=117324945005401" target="blank"><?php echo __('Galería de la habitación')?></a></td>
</tr></tbody>
</table>
<p><b>*</b>: Valor programa con cama adicional sólo habitaciones 202 o 204 $ 450.000 más</p>
<h2><?php echo __('Información y Reservas')?></h2>
<strong><?php echo __('Fono')?>:</strong> (+56) 32-3196798<br/>
<strong>Email:</strong> <a href="mailto:reservas@sutherlandhouse.cl?subject=Reserva Año Nuevo">reservas@sutherlandhouse.cl</a>
<?php include_component('reserva', 'formulario', array('asunto' => "Reserva Año Nuevo", 'llegada' => '2012-12-29', 'salida' => '2013-01-01'))?>

<h2><?php echo __('Condiciones Generales')?></h2>
<ul>
<!-- <li><?php echo __('Tarifa en Dólares referenciales y aplicable para extranjeros no residentes en Chile con Factura de Exportación. Tarifa sujeta
a modificación sin previo aviso, dependiendo del tipo de cambio de cierre del mercado al momento de la reserva. Franquicia Tributaria (Exentos del pago de Impuesto 19% IVA).') ?></li> -->
<li><?php echo __('Las tarifas en pesos chilenos incluyen IVA.')?></li>
<li><?php echo __('Valor por habitación single o doble.')?></li>
<li><?php echo __('Horario de Check In desde las 15:00 hrs.')?></li>
<li><?php echo __('Late Check Out, 16:00 hrs.')?></li>
<li><?php echo __('No incluye cama adicional.') ?></li>
<li><?php echo __('Reservas limitadas a 9 habitaciones.')?></li>
<li><?php echo __('No dispone de acceso para minusválidos.') ?></li>
<li><?php echo __('No se aceptan mascotas')?></li>
<li><?php echo __('Las dependencias del hotel son para no fumadores, solo en las terrazas se permite fumar.') ?></li>
</ul>
<h2><?php echo __('Forma de Pago') ?></h2>
<ul>
<li><?php echo __('Prepago del 60% al momento de la reserva mediante: pago efectivo, transferencia bancaria.')?></li>
<li><?php echo __('Saldo se cancela al 15 de diciembre del %year%.',array('%year%' => date('Y'))) ?></li>
<!--<li>Saldo 50% documentado con cheque, pago efectivo, transferencia bancaria o tarjeta de crédito indicando su número y fecha de vencimiento, <strong>10 días antes</strong> del evento.</li>-->
</ul>
<h2><?php echo __('Política de Cancelación') ?></h2>
<p><?php echo __('Cancelación de reservas hasta el <b>15 de Diciembre del %year%</b>. Pasado ese plazo no habrá reintegros ni devoluciones.',array('%year%' => date('Y')))?></p>
