<?php use_stylesheet('index.css')?>
<?php slot('title', __('Hotel Sutherland House - Hotel Boutique &amp; Café Valparaíso, Chile'))?>
<?php slot('keywords', __("Hotel, Valparaíso, Hotel Boutique, Hotel Boutique Sutherland House, Reservas, hoteles, alojamiento, Paseos, Vista a la Bahía, Cafetería, Café"))?>
<?php slot('description', __("El Hotel Boutique &amp; Café Sutherland House se encuentran aledaños a la zona típica de conservación histórica de Valparaíso, en una casona cuya data de construcción es de 1870, en pleno Cerro Alegre."))?>
<div id="principal">
<div id="superior">
<div id="logo"><?php echo link_image_to('logo_vertical.png','@hotel_homepage',array('size' => '420x105', 'alt' => __("Logo Hotel Boutique Sutherland House")))?></div>
<div id="texto-superior"><?php echo __('Al <strong>Valparaíso</strong> de la segunda mitad del siglo XIX, se remonta la historia de la casa de la Av. Alemania 4966, en Cerro Alegre.
Antigua rectoría del <strong>Colegio Mackay</strong>, la cual se transformó en el <strong>Hotel Boutique Sutherland House</strong>.'); ?></div>
<div id="idioma"><?php include_partial('language/language')?></div>
</div>
<div id="slideshow">
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_01.jpg', array('size' => '885x390', 'class' => 'active', 'alt' => __("Vista Bahía Valparaíso desde Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_08.jpg', array('size' => '885x390', 'alt' => __("Fachada Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_02.jpg', array('size' => '885x390', 'alt' => __("Vista Cerros de Valparaíso desde Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_04.jpg', array('size' => '885x390', 'alt' => __("Fachada Nocturna Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_06.jpg', array('size' => '885x390', 'alt' => __("Escalera Ingreso Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_05.jpg', array('size' => '885x390', 'alt' => __("Vista Recepción Hotel Boutique Sutherland House.")))?>
</div>
<div id="pieweb">
<?php echo link_image_to('banner_new_year_2012_hotel_sutherland.jpg','@hotel_new_year', array('size' => '885x100', 'alt' => __("Año Nuevo %ANHO% en el mar de Valparaíso",array('%ANHO%' => date('Y')+1))), 
                          array( 'title' => __("ver programa Año Nuevo en el Mar %ANHO% en Valparaíso",array('%ANHO%' => date('Y')+1))))?>
<ul>
<li class="ultimo"><?php echo link_image_to('logo_hotel_sutherland_house_chico.png','@hotel_hotel', array('size' => '35x28', 'alt' => __("Logo Hotel Boutique Sutherland House")))?></li>
<li><?php echo link_to(__('Hotel'),'@hotel_hotel')?></li>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Reservas'),'@reserva')?></li>
<li><?php echo link_to(__('Ubicación'),'@hotel_ubicacion')?></li>
<li><?php echo link_to(__('Historia'),'@hotel_historia')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li class="ultimo"><?php echo link_to(__('Cafe &amp; RestoBar'),'@cafe')?></li>
<li class="ultimo"><?php echo link_image_to('logo_cafeteria_sutherland_house_chico.png','@cafe', array('size' => '40x28', 'alt' => __("Logo Café &amp; RestoBar Sutherland House")))?></li>
</ul>
</div>
<?php include_partial('hotel/footerContacto')?>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
