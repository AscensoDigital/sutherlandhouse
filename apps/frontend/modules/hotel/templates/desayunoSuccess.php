<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('Desayuno Buffet - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("desayuno buffet, Hotel Boutique Sutherland House, vista a la bahía"))?>
<?php slot('description', __("El desayuno Buffet del hotel boutique Sutherland House viene incluido en la tarifa, este puede servirse en nuestro salón Mackay o en la terraza del hotel."))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'desayuno', 'title' => 'Desayuno', 'imagenes' => $galeria)))?>
<?php include_partial('hotel/hotel_submenu')?>
<div id="columna1">
<h2><?php echo __('Buffet')?></h2>
<ul>
<li><?php echo __('Café')?></li>
<li><?php echo __('Té e infusiones')?></li>
<li><?php echo __('Leche entera y semi-descremada (sin lactosa)')?></li>
<li><?php echo __('Jugos naturales')?></li>
<li><?php echo __('Pan blanco e integral')?></li>
<li><?php echo __('Mantequilla')?></li>
</ul>
<h3><?php echo __('Dulce')?></h3>
<ul>
<li><?php echo __('Mermeladas artesanales')?></li>
<li><?php echo __('Ensalada de frutas')?></li>
<li><?php echo __('Cereales y avena')?></li>
<li><?php echo __('Frutos secos')?></li>
<li><?php echo __('Yogurt')?></li>
<li><?php echo __('Tarteletas de frutas')?></li>
<li><?php echo __('Miel')?></li>
<li><?php echo __('Azúcar y endulcorante')?></li>
</ul>
</div>
<div id="columnaextra">
<h2>&nbsp;</h2>
<h3><?php echo __('Salado')?></h3>
<ul>
<li><?php echo __('Jamón')?></li>
<li><?php echo __('Queso')?></li>
<li><?php echo __('Tomate')?></li>
</ul>
<h3><?php echo __('Opciones')?></h3>
<ul>
<li><?php echo __('Huevos revueltos')?></li>
<li><?php echo __('Omelette')?></li>
</ul>
</div>