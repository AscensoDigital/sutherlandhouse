	<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('Promoción Año Nuevo %year% en el Mar - Hotel Boutique Sutherland House Valparaíso, Chile',array('%year%' => date('Y')+1)))?>
<?php slot('keywords', __("promoción año nuevo en el mar valparaíso, fuegos articiales, juegos artificiales borde costero, año nuevo %year% hotel, reserva año nuevo %year%", array('%year%' => date('Y')+1)))?>
<?php slot('description', __("Reserva tu habitación en el hotel boutique sutherland house para el programa de año nuevo en el mar %year% de valparaíso donde verás uno de los espectáculos pirotecnicos más espectaculares del mundo.", array('%year%' => date('Y')+1)))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'newyear', 'title' => 'Año Nuevo', 'imagenes' => $galeria)))?>
<h2><?php echo __('Programa año Nuevo %year% en Hotel Boutique Sutherland House<br/>', array('%year%' => date('Y')+1))?></h2>
<!--<h3 style="color: red">ÚLTIMA HABITACIÓN</h3>-->
<p><?php echo __('Programa uno incluye 2 noches y 3 días de alojamiento desde el 30 de Diciembre %year_old% hasta el 01 de Enero de %year_new% para 2 personas.', array('%year_old%' => date('Y'), '%year_new%' => date('Y')+1))?></p> - Desde $850.000 CLP
<p><?php echo __('Programa dos incluye 1 noche y 2 días de alojamiento desde el 31 de Diciembre %year_old% hasta el 01 de Enero de %year_new% para 2 personas.', array('%year_old%' => date('Y'), '%year_new%' => date('Y')+1))?></p> - Desde $580.000 CLP
<h3>30 <?php echo __('de diciembre')?>:</h3> Programa (1)
<p><b>15.00 <?php echo __('horas')?>:</b> Check in.<br/>
<b>18.15 <?php echo __('horas')?>:</b> <?php echo __('Caminata por sector patrimonial.')?><br/>
<b>20.15 <?php echo __('horas')?>:</b> <?php echo __('Paseo en Lancha por la costa de Valparaíso.')?><br/>
<b>21.15 <?php echo __('horas')?>:</b> <?php echo __('Cóctel de bienvenida')?><br/>
- <?php echo __('Sutherland Sour.')?><br/>
- <?php echo __('Degustación de vinos.')?><br/>
    - <?php echo __('Bebidas.')?><br/>
    - <?php echo __('Cerveza artesanal.')?><br/>
    - <?php echo __('Bocados fríos.')?><br/>
  - <?php echo __('Bocados caliente.')?><br/>
    - <?php echo __('Bocados dulces.')?></p>
<h3>31 <?php echo __('de diciembre')?>:</h3> <?php echo __('Programa (2) incluye Check in desde las 09.00 con desayuno incluido.')?>
<p><b>8.30 a 11.30:</b> <?php echo __('Desayuno buffet.')?><br/>
  <b>21.00 <?php echo __('horas')?>:</b> <?php echo __('Cena "MAR y TIERRA"')?></p>
    <h4><?php echo __('BUFFET PRINCIPAL')?></h4>
- <?php echo __('Filete de res en salsa de Setas')?><br/>
- <?php echo __('Albacora en salsa de Mariscos')?><br/>
- <?php echo __('Pavo en salsa de Mostaza')?><br/>
<h4><?php echo __('BUFFET GUARNICIONES')?></h4>
- <?php echo __('Risotto Funghi')?><br/>
- <?php echo __('Trío de pastas en salsas')?><br/>
- <?php echo __('Gratín de Papas y Champiñones')?><br/>
<h4><?php echo __('BUFFET DE POSTRES')?></h4><br/>
<p><b>23.00 <?php echo __('horas')?>:</b> <?php echo __('Botella de espumante en la habitación.')?></p>
<h3>1 <?php echo __('de Enero')?></h3>
<p><b><?php echo __('Desde 00.30 horas')?>:</b> <?php echo __('Fiesta, DJ, cotillón y bar abierto.')?><br/>
  <b>03.00 <?php echo __('horas')?>:</b> <?php echo __('Consomé y tapaditos.')?><br/>
  <b>04.30 <?php echo __('horas')?>:</b> <?php echo __('Cierre.')?></p>
<p><b>"<?php echo __('Sorteo de una noche de alojamiento para un fin de semana en habitación con terraza')?>."</b></p>
<p><b>09.00 a 13.00:</b> <?php echo __('Brunch (desayuno / almuerzo).')?><br/>
<b>16.30 <?php echo __('horas')?>:</b>  <?php echo __('Check out.')?></p>
    <h2><?php echo __('Condiciones Generales')?></h2>
    <ul>
        <li>Solo para nacionales: El plan (1) Contempla los días 30, 31 de diciembre y 1 de enero, mientras que el plan (2) es a partir del día 31 de diciembre, con la opción de early check in, incluyendo desayuno el mismo día.</li>
        <li><?php echo __('Tarifa en Dólares aplicable solo para extranjeros no residentes en Chile') ?></li>
        <li><?php echo __('Las tarifas en pesos chilenos incluyen IVA.')?></li>
        <li><?php echo __('Tarifa por habitación single o doble.')?></li>
        <li><?php echo __('Horario de Check In plan (1) desde las 15:00 hrs.')?></li>
        <li><?php echo __('Late Check Out, 16:00 hrs.')?></li>
        <li><?php echo __('No incluye cama adicional.') ?></li>
        <li><?php echo __('Reservas limitadas a 9 habitaciones.')?></li>
        <li><?php echo __('No dispone de acceso para minusválidos.') ?></li>
        <li><?php echo __('No se aceptan mascotas')?></li>
        <li><?php echo __('Las dependencias del hotel son para no fumadores, solo en las terrazas se permite fumar.') ?></li>
        <li>Cupos limitados de estacionamientos, consultar y solicitar al momento de reservar.</li>
    </ul>
    <h2><?php echo __('Forma de Pago') ?></h2>
    <ul>
        <li><?php echo __('Prepago del 60% al momento de la reserva mediante pago en efectivo, transferencia electrónica bancaria equivalente a pesos chilenos o cargo tarjeta de crédito.')?></li>
        <li><?php echo __('Saldo se cancela al 15 de diciembre del %year%.',array('%year%' => date('Y'))) ?></li>
    </ul>
    <h2><?php echo __('Política de Cancelación') ?></h2>
    <p><?php echo __('Cancelación de reservas hasta el <b>31 de Octubre del %year%</b>. Pasado ese plazo no habrá reintegros ni devoluciones.',array('%year%' => date('Y')))?></p>

    <h2>Tarifas por Habitación</h2>
    <table>
        <thead><tr><th>Habitación</th><th>Características</th><th>Valor USD</th><th>Valor CLP Plan (1)</th><th>Valor CLP Plan (2)</th></tr></thead>
        <tbody>
        <tr><td>101</td><td>Suite</td><?php if(false):?><td colspan="3">Reservada</td><?php else: ?><td>1.700</td><td>900.000</td><td>630.000</td><?php endif?></tr>
        <tr><td>201</td><td>Suite King con Terraza</td><?php if(true):?><td colspan="3">Reservada</td><?php else: ?><td>1.830</td><td>980.000</td><td>680.000</td><?php endif?></tr>
        <tr><td>202</td><td>Suite</td><?php if(true):?><td colspan="3">Reservada</td><?php else: ?><td>1.700</td><td>900.000</td><td>630.000</td><?php endif?></tr>
        <tr><td>203</td><td>Suite (Con opción a doble)</td><?php if(false):?><td colspan="3">Reservada</td><?php else: ?><td>1.700</td><td>850.000</td><td>580.000</td><?php endif?></tr>
        <tr><td>204</td><td>Doble</td><?php if(true):?><td colspan="3">Reservada</td><?php else: ?><td>1.700</td><td>850.000</td><td>580.000</td><?php endif?></tr>
        <tr><td>301</td><td>Suite King</td><?php if(false):?><td colspan="3">Reservada</td><?php else: ?><td>1.830</td><td>980.000</td><td>680.000</td><?php endif?></tr>
        <tr><td>302</td><td>Suite</td><?php if(true):?><td colspan="3">Reservada</td><?php else: ?><td>1.830</td><td>980.000</td><td>680.000</td><?php endif?></tr>
        <tr><td>303</td><td>Suite King corner</td><?php if(false):?><td colspan="3">Reservada</td><?php else: ?><td>1.830</td><td>980.000</td><td>680.000</td><?php endif?></tr>
        <tr><td>304</td><td>Suite</td><?php if(true):?><td colspan="3">Reservada</td><?php else: ?><td>1.700</td><td>900.000</td><td>630.000</td><?php endif?></tr>
        </tbody>
    </table>
    <p>Consultar por disponibilidad de cama adicional, con una tarifa de USD 75O; para pasajeros nacionales cambio de dolar del día.</p>

<h2><?php echo __('Habitaciones')?></h2>
<table id="habitacion">
<tbody><tr>
<td><?php echo upload_tag('habitacion/habitacion 303 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 303 - Suite King Corner')))?><br/><b><?php echo __('Habitación 303 - Suite King Corner')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 303 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 303'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 303</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 201 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 201 - Suite King con Terraza')))?><br/><b><?php echo __('Habitación 201 - Suite King con Terraza')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 201 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 201'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 201</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 301 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 301 - Suite King Panoramic')))?><br/><b><?php echo __('Habitación 301 - Suite King Panoramic')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 301 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 301'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 301</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 302 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 302 - Suite Romantic')))?><br/><b><?php echo __('Habitación 302 - Suite Romantic')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 302 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 302'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 302</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 304 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 304 - Suite')))?><br/><b><?php echo __('Habitación 304 - Suite')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 304 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 304'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 304</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 101 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 101 - Suite')))?><br/><b><?php echo __('Habitación 101 - Suite')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 101 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 101'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 101</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 202 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 202 - Suite')))?><br/><b><?php echo __('Habitación 202 - Suite')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 202 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 202'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 202</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 203 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 203 - Suite / Doble')))?><br/><b><?php echo __('Habitación 203 - Suite / Doble')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 203 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 203'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 203</b><br/></td>
</tr><tr>
<td><?php echo upload_tag('habitacion/habitacion 204 Hotel Sutherland House Noche.JPG', array('size' => '300x201', 'alt' => __('Habitación 204 - Doble')))?><br/><b><?php echo __('Habitación 204 - Doble')?></b><br/></td>
<td><?php echo upload_tag('habitacion/habitacion 204 Hotel Sutherland House Vista Nocturna.JPG', array('size' => '300x201', 'alt' => __('Vista Nocturna Habitación').' 204'))?><br/><b><?php echo __('Vista Nocturna Habitación')?> 204</b><br/></td>
</tr></tbody>
</table>

<h2><?php echo __('Información y Reservas')?></h2>
<strong><?php echo __('Fono')?>:</strong> (+56) 32-3196798<br/>
<strong>Email:</strong> <a href="mailto:reservas@sutherlandhouse.cl?subject=Reserva Año Nuevo">reservas@sutherlandhouse.cl</a>
<?php include_component('reserva', 'formulario', array('asunto' => "Reserva Año Nuevo", 'llegada' => date('Y').'-12-30', 'salida' => (date('Y')+1).'-01-01'))?>
