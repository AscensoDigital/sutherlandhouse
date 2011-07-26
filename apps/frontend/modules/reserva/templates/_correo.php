<?php use_helper('Date')?>
Nombre Completo: <?php echo ucwords($valores['nombre_completo'])?><br/>
Email: <?php echo $valores['email']?><br/>
Teléfono: <?php echo $valores['teléfono']?><br/>
País: <?php echo format_country($valores['país'], 'es')?><br/>
Llegada: <?php echo format_date($valores['fecha_reserva']['from'], 'dd MMMM yyyy', 'es')?><br/>
Salida: <?php echo format_date($valores['fecha_reserva']['to'], 'dd MMMM yyyy', 'es')?><br/>
Habitaciones Deseadas: <?php foreach($valores['habitaciones_deseadas'] as $habitacion):?>
<?php echo $habitacion?>, 
<?php endforeach?><br/>
Cantidad Adultos: <?php echo $valores['cantidad_adultos']?><br/>
Cantidad Niños: <?php echo $valores['cantidad_niños']?><br/>
Forma Pago: <?php echo $valores['forma_pago']?><br/>
Información Adicional: <?php echo $valores['información_adicional'] ?>