<?php use_stylesheet('seccion.css') ?>
<?php slot('title', __('Habitaciones todas con vista a la bahía - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("habitaciones, suite, king, doble, Hotel Boutique Sutherland House, vista a la bahía, vistas"))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'habitaciones', 'title' => 'Habitaciones', 'imagenes' => $galeria)))?>

<div id="menusecundario" class="habitaciones">
<ul><li><a href="#Habitacion303" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '303']);">303</a></li><li><a href="#Habitacion201" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '201']);">201</a></li><li><a href="#Habitacion301" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '301']);">301</a></li>
<li><a href="#Habitacion302" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '302']);">302</a></li><li><a href="#Habitacion304" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '304']);">304</a></li><li><a href="#Habitacion202" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '202']);">202</a></li>
<li><a href="#Habitacion101" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '101']);">101</a></li><li><a href="#Habitacion203" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '203']);">203</a></li><li><a href="#Habitacion204" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'IrA', '204']);">204</a></li>
<!--<li><a href="#tarifa1" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Tarifas', '']);">Tarifas</a></li>-->
</ul></div>
<p>&nbsp;</p>
<h2><?php echo __('Habitaciones') ?></h2>
<p><?php echo __('Nuestro hotel cuenta con 9 habitaciones: todas cómodas y luminosas, con vista a la ciudad y la bahía,  distribuidas en 3 pisos.') ?> 
<?php echo __('Todas tienen teléfono, TV cable, secador de pelo, calefacción, cerradura electrónica, almohadas Memory Flex e incluyen desayuno Buffet o Americano en nuestro salón Mackay o terraza.') ?></p>
<p><?php echo __('Adicionalmente incluimos gratuitamente traslado desde Terminal de Buses de Valparaíso al Hotel.') ?></p>
<p><?php echo __('Los baños de nuestras habitaciones tienen un diseño con reminiscencias de los antiguos baños, constan de un mueble en pino Oregón, un vanitorio y una grifería que representan al lavatorio y la jarra que usaban antiguamente.')?></p>
<table id="habitacion">
<tbody>
<tr>
<td><a name="Habitacion303"></a><?php echo upload_tag('habitacion/habitacion 303 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 303 King Corner')))?></td>
<td><?php echo __('La <b>habitación 303 - King Corner</b> cuenta con una vista de 260 grados desde el box windows de la habitación, donde se presencia una visión distinta que invita a quedarse en contemplación del anfiteatro que forman los cerros y la amplia bahía de Valparaíso.')?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26817&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '303']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=303'))?></li>
</ul></td></tr><tr>
<td><a name="Habitacion201"></a><?php echo __('La <b>habitación 201 - Doble* con amplia Terraza</b> es un espacio soñado: luminosa, amplia, con dos camas de calidad.')?> 
<?php echo __('El plus está en su amplia terraza que mira a la bahía, los cerros y enfrente una hermosa postal de bosque verde, una imponente edificación de colegio y al fondo la cordillera
de la costa y en dias despejados la majestuosa silueta del monte Aconcagua.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26570&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '201']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=201'))?></li>
</ul>* <?php echo __('Desde 1 Octubre será habitación King.') ?></td>
<td><?php echo upload_tag('habitacion/habitacion 201 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 201 Twin con terraza')))?></td>
</tr><tr>
<td><a name="Habitacion301"></a><?php echo upload_tag('habitacion/habitacion 301 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 301 King Panoramic')))?></td>
<td><?php echo __('La <b>habitación 301 - King Panoramic</b> es un espacio excepcional muy seductor, con un completo equipamiento interior que incluye frigo bar.
Todo esto acompañado de una vista PANORÁMICA de Valparaíso que podrá gozar y compartir Ud y su pareja desde la propia cama.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26637&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '301']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=301'))?></li>
</ul></td></tr><tr>
<td><a name="Habitacion302"></a><?php echo __('La <b>habitación 302 - Suite Romantic</b> es el espacio ideal para la seducción de una escapada romántica, noche de bodas o aniversario de matrimonio;
desde la entrada se distingue su singular belleza y ese toque que invita a la intimidad, su box windows llama a contemplar la ciudad y a la conversación cercana.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26639&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '302']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=302'))?></li>
</ul></td>
<td><?php echo upload_tag('habitacion/habitacion 302 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 302 Suite Romantic')))?></td>
</tr><tr>
<td><a name="Habitacion304"></a><?php echo upload_tag('habitacion/habitacion 304 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 304 Suite')))?></td>
<td><?php echo __('La <b>habitación 304 - Suite</b> es un espacio ideal para el descanso y al acercarse a la ventana aparece en toda su dimensión la amplia bahía de Valparaíso
hasta las dunas de Concon. Y en las noches de luna llena la bahía resplandece y la noche de fin de año nos permite una vista total del espectáculo pirotécnico.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26831&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '304']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=304'))?></li>
</ul></td></tr><tr>
<td><a name="Habitacion202"></a><?php echo __('En la <b>habitación 202 - Suite</b> desde su puerta ya podemos ver que estámos en una de las habitaciones propias de esta casa que data del año 1874,
su ventana de doble hoja nos presenta la ciudad, su bahía y sus cerros, pero también nos muestra la calides de las maderas originales de esta hermosa construcción.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26577&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '202']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=202'))?></li>
</ul></td>
<td><?php echo upload_tag('habitacion/habitacion 202 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 202 Suite')))?></td>
</tr><tr>
<td><a name="Habitacion101"></a><?php echo upload_tag('habitacion/habitacion 101 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 101 Suite')))?></td>
<td><?php echo __('La <b>Habitación 101 - Suite</b> consta de doble puerta lo que favorece su intimidad. Es un espacio de techo muy alto, típico de los primeros pisos de estas
casas de estilo inglés. Al acercarse a la ventana, nos encontramos con una vista sobre el eje de la Avenida Alemania y al fondo la bahía de Valparaíso.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26567&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '101']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=101'))?></li>
</ul></td></tr><tr>
<td><a name="Habitacion203"></a><?php echo __('La <b>habitación 203 - Doble</b> presenta dos confortables camas de 1 1/2 plazas en un espacio que nos habla del antiguo esplendor de esta casona,
permitió la implementación de un espacioso baño interior en que se cuidó todos los detalles para lograr un nivel de calidad.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26589&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '203']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=203'))?></li>
</ul></td>
<td><?php echo upload_tag('habitacion/habitacion 203 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 203 Twin')))?></td></tr>
<tr><td><a name="Habitacion204"></a><?php echo upload_tag('habitacion/habitacion 204 Hotel Sutherland House.JPG', array('size' => '340x228', 'alt' => __('Habitación 204 Twin')))?></td>
<td><?php echo __('La <b>Habitación 204 - Doble</b> se agrega a la construcción original de la casa; es un amplio y luminoso espacio con dos camas, desde su ventana
se aprecian magnificas vista diurnas y nocturnas de la ciudad y la bahía. La gran ventaja es que en ella se puede agregar una tercera cama sin perjudicar el
desplazamiento interior.') ?>
<ul><li><a href="http://www.facebook.com/album.php?aid=26591&amp;id=117324945005401" target="blank" onclick="_gaq.push(['_trackEvent', 'Habitacion', 'Galeria', '204']);"><?php echo __('Galería de la habitación')?></a></li>
<li><?php echo link_to(__('Consultar y/o Reservar'),'@reserva',array('query_string' => 'habitacion=204'))?></li>
</ul></td></tr>
</tbody></table>