<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('Reserva nuestras habitaciones - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("reservas, habitaciones, Hotel Boutique Sutherland House, Valparaíso, hoteles, alojamiento, chile"))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'hotel', 'title' => 'Hotel', 'imagenes' => $galeria)))?>
<h2><?php echo __('Consultar y/o Reservas')?></h2>
<p style="border:3px double #C2BC00;padding: 5px;"><?php echo __('Estimado(a)') ?> <?php echo ucwords($sf_params->get('nombre'))?>,<br/><?php echo __('Su mail ha sido enviado con éxito, lo contactaremos lo antes posible.')?><br/>
<?php echo __('Para mayor información contacte a los siguientes teléfonos')?> (+56) 32-3196798 <?php echo __('o al')?> (+56) 09-89893086.</p>