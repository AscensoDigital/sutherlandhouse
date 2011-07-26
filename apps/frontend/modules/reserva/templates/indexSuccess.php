<?php use_stylesheet('seccion.css')?>
<?php slot('title', format_number_choice(
    '[0]Reserva nuestras habitaciones todas con vista al mar - Hotel Boutique Sutherland House Valparaíso, Chile 
     |(1,+Inf]Reserva nuestra habitación %hab% con vista al mar - Hotel Boutique Sutherland House Valparaíso, Chile',
    array('%hab%' => $sf_params->get('habitacion')),
    $sf_params->get('habitacion',0)
  ))?>
<?php slot('keywords', __("reservas, habitaciones con vista al mar, Hotel Boutique Sutherland House, Valparaíso, hoteles, alojamiento, chile"))?>
<?php slot('description', __("Consulta y Reserva nuestras habitaciones, todas con vista a la bahía y los cerros de Valparaíso, en el Hotel Boutique Sutherland House del Cerro Alegre de Valparaíso."))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'hotel', 'title' => 'Hotel', 'imagenes' => $galeria)))?>
<h2><?php echo __('Consultar y/o Reservas') ?></h2>
<?php include_partial('reserva/formulario', array('frmReserva' => $frmReserva))?>

<?php include_partial('reserva/condiciones')?>