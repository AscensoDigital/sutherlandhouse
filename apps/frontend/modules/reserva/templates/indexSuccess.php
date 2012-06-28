<?php use_stylesheet('seccion.css')?>
<?php slot('title', format_number_choice(
    '[0]Reserva nuestras habitaciones todas con vista al mar - Hotel Boutique Sutherland House Valparaíso, Chile|[1, +Inf] Reserva nuestra habitación %hab% con vista al mar - Hotel Boutique Sutherland House Valparaíso, Chile',
    array('%hab%' => $sf_params->get('habitacion')), intval($sf_params->get('habitacion',0))))?>
<?php slot('keywords', __("reservas, habitaciones con vista al mar, Hotel Boutique Sutherland House, Valparaíso, hoteles, alojamiento, chile"))?>
<?php slot('description', format_number_choice(
    '[0]Consulta y Reserva nuestras habitaciones, todas con vista a la bahía y los cerros de Valparaíso, en el Hotel Boutique Sutherland House del Cerro Alegre de Valparaíso.|[1, +Inf] Consulta y Reserva nuestra habitación %hab%,
      con vista a la bahía y los cerros de Valparaíso, en el Hotel Boutique Sutherland House del Cerro Alegre de Valparaíso.',array('%hab%' => $sf_params->get('habitacion')), intval($sf_params->get('habitacion',0))))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'hotel', 'title' => 'Hotel', 'imagenes' => $galeria)))?>
<h2><?php echo __('Reserva en línea') ?></h2>
<script type="text/javascript" src="http://www.booking.com/general.html?tmpl=bookit;aid=330843;lang=<?php echo $sf_params->get('sf_culture')?>;hotel_id=289904;pb=0"></script><br/>
<h2><?php echo __('Consultas') ?></h2>
<?php include_partial('reserva/formulario', array('frmReserva' => $frmReserva))?>

<?php include_partial('reserva/condiciones')?>