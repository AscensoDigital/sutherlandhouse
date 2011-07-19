<?php use_stylesheet('index.css')?>
<?php use_helper('UrlExt')?>
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
<div id="pieweb"><ul>
<li class="ultimo"><?php echo link_image_to('logo_hotel_sutherland_house_chico.png','@hotel_hotel', array('size' => '35x28', 'alt' => __("Logo Hotel Boutique Sutherland House")))?></li>
<li><?php echo link_to(__('Hotel'),'@hotel_hotel')?></li>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Reservas'),'@reserva')?></li>
<li><?php echo link_to(__('Ubicación'),'@hotel_ubicacion')?></li>
<li><?php echo link_to(__('Historia'),'@hotel_historia')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li class="ultimo"><?php echo link_to(__('Cafe &amp; RestoBar'),'@cafe_homepage')?></li>
<li class="ultimo"><?php echo link_image_to('logo_cafeteria_sutherland_house_chico.png','@cafe_homepage', array('size' => '40x28', 'alt' => __("Logo Café &amp; RestoBar Sutherland House")))?></li>
</ul>
</div>
<div id="contactos"><p><?php echo __('Teléfono'); ?>: (+56) 32-3196798 - contacto@sutherlandhouse.cl<br/>Av. Alemania #4966 - Cerro Alegre - Valparaíso - Chile</p></div>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
