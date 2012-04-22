<?php use_stylesheet('cafe_index')?>
<?php use_stylesheet('lightbox')?>
<?php use_javascript('prototype.js')?>
<?php use_javascript('scriptaculous.js?load=effects,builder')?>
<?php use_javascript('lightbox.js')?>
<?php slot('title', __('Café &amp; RestoBar - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("café, restobar, cafe restobar, cafeteria, Valparaíso"))?>
<?php slot('description', __("Café restoBar abierto a todo el público con la mejor vista al mar y los cerros de valparaíso."))?>
<script src="/js/AC_RunActiveContent.js" type="text/javascript"></script>
<div id="principal">
<div id="head">
<div id="idioma"><p>Abierto de Lunes a Domingo Teléfono: (+56) 32-3196798</p><?php include_partial('language/language')?></div>
<div id="logo"><?php echo link_image_to('cafe/logo_cafeteria_sutherland_house.png','@cafe')?></div>
<div id="menu">
<ul><li><?php echo link_to(__('Hotel'),'@hotel_homepage')?></li>
<li><a href="#"><?php echo __('Eventos')?></a></li>
<li><a href="#"><?php echo __('Noticias')?></a></li>
<li class="uno"><a href="#"><?php echo __('Quienes Somos')?></a></li>
<li><a href="#"><?php echo __('Ubicación') ?></a></li></ul>
</div>
<div id="submenu">
<ul><li><a href="#"><?php echo __('A la carta')?></a> -</li>
<li><a href="#"><?php echo __('After Office')?></a> -</li>
<li><a href="#"><?php echo __('Cumpleaños')?></a> -</li>
<li><a href="#"><?php echo __('Reuniones')?></a> -</li>
<li><a href="#"><?php echo __('Exposiciones')?></a></li></ul>
</div>
</div>
<div id="movie_down">
<script type="text/javascript">AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','805px','height','364px','wmode','transparent','src','/swf/core_cafeteria','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','/swf/core_cafeteria' );</script>
</div>
<div id="contenido">
<div id="servicios">
<p>Servicios</p>
<?php echo link_image_to('cafe/icono_cafe.png', '@cafe',array('title' => __('Cafetería'), 'alt' => __('Cafetería'), 'class' => 'icoespacio')) ?>
<?php echo link_image_to('cafe/icono_bar.png', '@cafe', array('title' => __('Bar'), 'alt' => __('Bar'))) ?>
<?php echo link_image_to('cafe/icono_resto.png', '@cafe', array('title' => __('Restorant'), 'alt' => __('Restorant'))) ?>
<?php echo link_image_to('cafe/icono_reuniones.png', '@cafe', array('title' => __('Reuniones'), 'alt' => __('Reuniones'))) ?>
<?php echo link_image_to('cafe/icono_internet.png', '@cafe', array('title' => __('Wifi'), 'alt' => __('Wifi'))) ?>
</div>
<div id="galeria">
<p>Galería Café &amp; Resto Bar Hotel Sutherland House</p>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/fachada_hotel_sutherland_house.jpg', 'cafe/portada/fachada_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/fachada2_hotel_sutherland_house.jpg', 'cafe/portada/fachada2_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe2_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe2_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe3_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe3_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe4_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe4_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe5_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe5_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe6_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe6_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe61_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe61_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe7_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe7_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe8_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe8_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe9_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe9_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe10_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe10_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
<?php echo link_image_to_upload('/uploads/cafe/portada/chicas/cafe11_restobar_hotel_sutherland_house.jpg', 'cafe/portada/cafe11_restobar_hotel_sutherland_house.jpg', array('size' => '40x60'), array('class' => 'gallery', 'rel' => 'lightbox[roadtrip]'))?>
</div></div>
<div id="footer">
<ul><li><a href="http://www.sutherlandhouse.cl">Hotel</a> -</li>
<li><a href="#"><?php echo __('Café &amp; RestoBar')?></a> -</li>
<li><a href="#"><?php echo __('Eventos')?></a> -</li>
<li><a href="#"><?php echo __('Noticias')?></a> -</li>
<li><a href="#"><?php echo __('Quienes Somos')?></a> -</li>
<li><a href="#"><?php echo __('Comentarios')?></a> -</li>
<li><a href="#"><?php echo __('Ubicación')?></a></li>
<li class="footerdos"><a href="#"><?php echo __('A la carta')?></a> -</li>
<li><a href="#"><?php echo __('After Office')?></a> -</li>
<li><a href="#"><?php echo __('Cumpleaños')?></a> -</li>
<li><a href="#"><?php echo __('Reuniones')?></a> -</li>
<li><a href="#"><?php echo __('Exposiciones')?></a></li></ul>                   	
</div>
<div id="footer2">
<p><?php echo __('Teléfono') ?>: (+56) 32-3196798 - 
<?php echo mail_to('contacto@sutherlandhouse.cl', 'contacto@sutherlandhouse.cl', array(),array('subject' => '[WEB '.strtoupper($sf_params->get('sf_culture')).' '.ucfirst($sf_params->get('module')).'] Contacto'))?></p>
<p class="datos">Av. Alemania #4966 - Cerro Alegre - Valparaíso - Chile</p>
</div>
</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23790489-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
