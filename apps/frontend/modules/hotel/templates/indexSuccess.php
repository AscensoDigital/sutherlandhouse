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
    <?php echo image_tag('distincion-turismo-sustentable.png', array('class' => 'distincion')) ?>
<div id="slideshow">
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_01.jpg', array('size' => '885x390', 'class' => 'active', 'alt' => __("Vista Bahía Valparaíso desde Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_00.jpg', array('size' => '885x390', 'alt' => __("Fachada Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_02.jpg', array('size' => '885x390', 'alt' => __("Vista Cerros de Valparaíso desde Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_04.jpg', array('size' => '885x390', 'alt' => __("Fachada Nocturna Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_06.jpg', array('size' => '885x390', 'alt' => __("Escalera Ingreso Hotel Boutique Sutherland House.")))?>
<?php echo upload_tag('cabecera/home/hotel_sutherland_house_05.jpg', array('size' => '885x390', 'alt' => __("Vista Recepción Hotel Boutique Sutherland House.")))?>
</div>
<div id="pieweb">
<div id="TA_certificateOfExcellence891" class="TA_certificateOfExcellence">
<ul id="RvhxKAeO" class="TA_links nZtUgJl7c">
<li id="oVVTRXI9y5" class="gboU19X"><a target="_blank" href="http://www.tripadvisor.cl/Hotel_Review-g294306-d1957998-Reviews-Hotel_Boutique_Sutherland_House-Valparaiso_Valparaiso_Region.html"><img src="http://www.tripadvisor.cl/img/cdsi/img2/awards/CoE2015_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li>
</ul></div>

<a id="image-waze" href="waze://?q=Hotel+Sutherland+House" target="_blank"><?php echo image_tag('waze-hotel-sutherland-house.jpg')?></a>
<div class="paxer-widget-calendar"></div>
<!-- <script type="text/javascript" src="http://www.booking.com/general.html?tmpl=bookit;aid=330843;lang=<?php echo $sf_params->get('sf_culture')?>;hotel_id=289904;pb=0"></script><br/> -->
<?php echo link_image_to('banner_new_year_2015_hotel_sutherland.jpg','@hotel_new_year', array('size' => '885x100', 'alt' => __("Año Nuevo %ANHO% en el mar de Valparaíso",array('%ANHO%' => date('Y')+1))),
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
<li class="ultimo"><?php echo link_to(__('FAQ'),'@hotel_faq')?></li>
</ul>
</div>
<?php include_partial('hotel/footerContacto')?>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=891&amp;locationId=1957998&amp;lang=<?php echo $sf_params->get('sf_culture')?>&amp;year=2015&amp;display_version=2"></script>
<script type='text/javascript'>
  var paxer = {};
  paxer.secret = 'JFL9VF';
  paxer.iframeType = 'BOTH';
  paxer.triggerButton = '';  // Coloque aquí el id del botón o link de reservas de su sitio web
  paxer.widgetTheme = 'custom';
  paxer.widgetOrientation = 'horizontal'; 
  paxer.widgetColors = {"colorHeader1":"#c2bc00", "colorHeader2":"#3b3a3a", "colorBody1":"#f4f4f4", "colorBody2":"#666666"};
  paxer.paxerLang = '<?php echo in_array($sf_params->get('sf_culture'),array('en','es')) ? $sf_params->get('sf_culture') : '' ?>'; // Opcional: indique el código del idioma en el que desea ver el widget. Si no se especifica, establece el idioma principal del hotel. Idiomas soportados: es, en

  (function() {
    var paxerScript = document.createElement('script');
    paxerScript.type = 'text/javascript';
    paxerScript.async = true;
    paxerScript.src = 'https://www.paxer.com/lib/widget/paxer-booking.js?v='+ (new Date().getTime());
    var hscr = document.getElementsByTagName('head')[0];
    hscr.appendChild(paxerScript);
  })();
</script>