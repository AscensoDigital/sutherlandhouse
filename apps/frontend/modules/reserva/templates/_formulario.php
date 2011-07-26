<form action="<?php echo url_for('@reserva') ?>" method="POST">
<?php echo $frmReserva->renderHiddenFields() ?>
<table>
<?php if($frmReserva->hasGlobalErrors()):?><tr><td colspan="9"><?php echo $frmReserva->renderGlobalErrors() ?></td></tr><?php endif?>
<tr><th colspan="3"><?php echo $frmReserva['nombre_completo']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['nombre_completo']->renderError()?></th>
<th colspan="3"><?php echo $frmReserva['email']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['email']->renderError()?></th>
<th colspan="3"><?php echo $frmReserva['teléfono']->renderLabel()?><?php echo $frmReserva['teléfono']->renderError()?></th></tr>
<tr><td colspan="3"><?php echo $frmReserva['nombre_completo']?></td><td colspan="3"><?php echo $frmReserva['email']?></td><td colspan="3"><?php echo $frmReserva['teléfono']?><br/><?php echo $frmReserva['teléfono']->renderHelp()?></td></tr>
<tr><th colspan="4"><?php echo $frmReserva['fecha_reserva']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['fecha_reserva']->renderError()?></th>
<th colspan="5"><?php echo $frmReserva['país']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['país']->renderError()?></th></tr>
<tr><td colspan="4"><?php echo $frmReserva['fecha_reserva']?></td><td colspan="5"><?php echo $frmReserva['país']?></td></tr>
<tr><th colspan="9"><?php echo $frmReserva['habitaciones_deseadas']->renderLabel('Habitaciones de interés')?> <span class="required">*</span><?php echo $frmReserva['habitaciones_deseadas']->renderError()?></th></tr>
<tr><?php echo $frmReserva['habitaciones_deseadas']?></tr>
<tr><th colspan="3"><?php echo $frmReserva['cantidad_adultos']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['cantidad_adultos']->renderError()?></th>
<th colspan="3"><?php echo $frmReserva['cantidad_niños']->renderLabel()?><?php echo $frmReserva['cantidad_niños']->renderError()?></th>
<th colspan="3"><?php echo $frmReserva['forma_pago']->renderLabel()?> <span class="required">*</span><?php echo $frmReserva['forma_pago']->renderError()?></th></tr>
<tr><td colspan="3"><?php echo $frmReserva['cantidad_adultos']?></td><td colspan="3"><?php echo $frmReserva['cantidad_niños']?></td><td colspan="3"><?php echo $frmReserva['forma_pago']?></td></tr>
<tr><th colspan="9"><?php echo $frmReserva['información_adicional']->renderLabel()?> <?php echo $frmReserva['información_adicional']->renderError()?></th></tr>
<tr><td colspan="9"><?php echo $frmReserva['información_adicional']->renderHelp()?></td></tr>
<tr><td colspan="9"><?php echo $frmReserva['información_adicional']->render(array('cols' => 64, 'rows' => 5))?></td></tr>
<tr>
<td colspan="2">
<input type="submit"/>
</td>
</tr>
</table>
</form>