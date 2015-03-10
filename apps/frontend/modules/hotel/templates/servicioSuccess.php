<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('Servicios - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("Hotel Boutique Sutherland House, wifi, lavandería, tv cable, niñera"))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'servicio', 'title' => 'Servicios', 'imagenes' => $galeria)))?>
<?php include_partial('hotel/hotel_submenu')?>
<div id="columna1">
<h2><?php echo __('Servicios') ?></h2>
<?php echo image_tag('icon25_wifi_gratis.jpg', array('title' => __("WIFI en Hotel y en Habitaciones Gratis"), 'alt' =>__("wifi gratis"), 'size' => '30x30'))?> <?php echo __('WIFI libre en todas las areas.')?><br/>
<?php echo image_tag('icon25_mucama.jpg', array('title' => __("Servicio Camarera"), 'alt' =>__("servicio camarera"), 'size' => '30x30'))?> <?php echo __('Servicio de camarera.')?><br/>
<?php echo image_tag('icon25_rentacar.jpg', array('title' => __("Servicio de Estacionamiento"), 'alt' =>__("servicio estacionamiento"), 'size' => '30x30'))?> <?php echo __('Servicio de ballet parking.')?><br/>
<?php echo image_tag('icon25_bar.jpg', array('title' => __("Welcome drink"), 'alt' =>__("welcome drink"), 'size' => '30x30'))?> <?php echo __('Welcome drink.')?><br/>
<?php echo image_tag('icon25_desayuno_buffet.jpg', array('title' => __("Desayuno Buffet incluido"), 'alt' =>__("desayuno buffet"), 'size' => '30x30'))?> <?php echo __('Desayuno buffet.')?><br/>
<?php echo image_tag('icon25_secador_pelo.jpg', array('title' => __("Secador de Pelo"), 'alt' =>__("secador de pelo"), 'size' => '30x30'))?> <?php echo __('Secador de pelo.')?><br/>
<?php echo image_tag('icon25_tv_cable.jpg', array('title' => __("TV Cable"), 'alt' =>__("tv cable"), 'size' => '30x30'))?> <?php echo __('Televisión por cable.')?><br/>
<?php echo image_tag('icon25.gif', array('title' => __("Amenities"), 'alt' =>__("amenities"), 'size' => '30x30'))?> <?php echo __('Amenities en las habitaciones.')?>
</div>
<div id="columna2"><br/>
<?php echo image_tag('icon25_cerradura_electrica.jpg', array('title' => __("Cerradura Electrica"), 'alt' =>__("cerradura electrica"), 'size' => '30x30'))?> <?php echo __('Cerradura Eléctrica.')?><br/>
<?php echo image_tag('icon25_calefacion_centralizada.jpg', array('title' => __("Calefacción Central"), 'alt' =>__("calefacción central"), 'size' => '30x30'))?> <?php echo __('Calefacción central.')?><br/>
<?php echo image_tag('icon25_personal_bilingue.jpg', array('title' => __("Personal Bilingue"), 'alt' =>__("personal bilingue"), 'size' => '30x30'))?> <?php echo __('Personal bilingüe inglés, portugués y español.')?><br/>
<?php echo image_tag('icon25_fotocopias.jpg', array('title' => __("Impresora y escaner"), 'alt' =>__("impresora y escaner"), 'size' => '30x30'))?> <?php echo __('Impresora y escaner.')?><br/>
<?php echo image_tag('icon25_telefono.jpg', array('title' => __("Citófono en habitación"), 'alt' =>__("citófono"), 'size' => '30x30'))?> <?php echo __('Citófonos en las habitaciones.')?><br/>
<?php echo image_tag('icon25_asistencia_turistica.jpg', array('title' => __("Asistencia turística"), 'alt' =>__("asistencia turística"), 'size' => '30x30'))?> <?php echo __('Servicio de taxi y city tour a pedido.')?><br/>
<?php echo image_tag('icon25.gif', array('title' => __("Directorio Español e Inglés"), 'alt' =>__("directorio"), 'size' => '30x30'))?> <?php echo __('Directorios en español e inglés.')?><br/>
<?php echo image_tag('icon25.gif', array('title' => __("Cámaras de Seguridad"), 'alt' =>__("cámaras"), 'size' => '30x30'))?> <?php echo __('Cámaras de seguridad interiores y exteriores.')?>
</div>