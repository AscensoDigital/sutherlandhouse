<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<title><?php if(!include_slot('title')): echo __('Hotel Sutherland House - Hotel Boutique Valparaíso, Chile');endif?></title>
<?php if(has_slot('title')):?><meta name="title" content="<?php include_slot('title')?>"/><?php endif?>
<?php if(has_slot('description')):?><meta name="description" content="<?php include_slot('description')?>"/><?php endif?>
<?php if(has_slot('keywords')):?><meta name="keywords" content="<?php include_slot('keywords')?>"/><?php endif?>
<?php include_metas() ?>
<link rel="shortcut icon" href="/favicon.ico"/>
<?php include_stylesheets() ?>
</head>
<body>
<div id="principal">
<a name="inicio"></a>
<div id="logo"><?php echo link_image_to('logo_vertical.png','@hotel_homepage', array('alt' => __('Logo Hotel Boutique Sutherland House'), 'size' => '420x105'))?></div>
<div id="idioma"><?php include_partial('language/language')?></div>
<?php echo link_image_to('sustentable.png', 'http://www.chilesustentable.travel/', array('alt' => __('Sello sustentabilidad'), 'title' => __('Sello sustentabilidad'), 'size' => '192x86'))?>
<?php include_slot('galeria')?>
  <div id="info">
    <div id="TA_certificateOfExcellence363" class="TA_certificateOfExcellence">
      <ul id="2FaLRz8" class="TA_links Wt4LRQ6e5KHh">
        <li id="crdgyz" class="xicJyYQ7Xbhs">
          <a target="_blank" href="https://www.tripadvisor.es/Hotel_Review-g294306-d1957998-Reviews-Hotel_Boutique_Sutherland_House-Valparaiso_Valparaiso_Region.html"><img src="https://www.tripadvisor.es/img/cdsi/img2/awards/CoE2016_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
        </li>
      </ul>
    </div>
    <?php echo link_image_to('new_year_2015_hotel_sutherland_house.jpg', '@hotel_new_year', array('alt' => __('New Year').' '.date('Y')+1, 'title' => __('New Year').' '.date('Y')+1, 'size' => '192x86'))?>
<?php echo link_image_to('mapa-es.jpg', '@hotel_ubicacion', array('alt' => __('Mapa'), 'title' => __('Mapa'), 'size' => '192x86'))?>
<div class="fb-like" data-href="http://www.facebook.com/hotel.sutherland.house" data-send="false" data-layout="button_count" data-width="196" data-show-faces="false"></div>
</div>
<BR>
<div id="menusuperior">
<ul>
<li><?php echo link_to(__('Hotel'),'@hotel_hotel')?></li>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Reservas'),'@reserva')?></li>
<!--<li><?php echo link_to(__('Paseos'),'@hotel_paseo')?></li>-->
<li><?php echo link_to(__('Valparaíso'),'@hotel_valparaiso')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li class="ultimo"><?php echo link_to(__('Preguntas Frecuentes'),'@hotel_faq')?></li>
</ul>
</div>
<div id="inferior"><?php if($sf_params->get('module')!="reserva"):?>
<div class='paxer-widget-calendar'></div>
<?php endif?><?php echo $sf_content ?>
</div>
<div id="pieweb"><ul>
<li class="ultimo"><?php echo link_image_to('logo_hotel_sutherland_house_chico.png','@hotel_hotel', array('size' => '35x28', 'alt' => __("Logo Hotel Boutique Sutherland House")))?></li>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Reservas'),'@reserva')?></li>
<li><?php echo link_to(__('Paseos'),'@hotel_paseo')?></li>
<li><?php echo link_to(__('Valparaíso'),'@hotel_valparaiso')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li class="ultimo"><?php echo link_to(__('Preguntas Frecuentes'),'@hotel_faq')?></li>
</ul></div>
<?php include_partial('hotel/footerContacto')?>
</div>
<?php include_javascripts() ?>
<script type="text/javascript">jQuery(document).ready(function($){$('div.content').css('display','block');var onMouseOutOpacity=0.67;$('#thumbs ul.thumbs li').opacityrollover({mouseOutOpacity:onMouseOutOpacity,mouseOverOpacity:1.0,fadeSpeed:'fast',exemptionSelector:'.selected'});var gallery=$('#thumbs').galleriffic({delay:3500,numThumbs:12,preloadAhead:10,enableTopPager:true,enableBottomPager:true,maxPagesToShow:7,imageContainerSel:'#slideshow',controlsContainerSel:'#controls',captionContainerSel:'#caption',loadingContainerSel:'#loading',renderSSControls:true,renderNavControls:true,enableKeyboardNavigation:false,playLinkText:'<?php echo __('iniciar galería')?>',pauseLinkText:'<?php echo __('detener galería')?>',prevLinkText:' ',nextLinkText:' ',nextPageLinkText:'<?php echo __('Siguiente &rsaquo;')?>',prevPageLinkText:'<?php echo __('&lsaquo; Anterior')?>',enableHistory:false,autoStart:true,syncTransitions:true,defaultTransitionDuration:900,onSlideChange:function(prevIndex,nextIndex){this.find('ul.thumbs').children()
.eq(prevIndex).fadeTo('fast',onMouseOutOpacity).end()
.eq(nextIndex).fadeTo('fast',1.0);},onPageTransitionOut:function(callback){this.fadeTo('fast',0.0,callback);},onPageTransitionIn:function(){this.fadeTo('fast',1.0);}});function pageload(hash){if(hash){$.galleriffic.gotoImage(hash);}else{gallery.gotoIndex(0);}}
$.historyInit(pageload,"advanced.html");$("a[rel='history']").live('click',function(e){if(e.button!=0)return true;var hash=this.href;hash=hash.replace(/^.*#/,'');$.historyLoad(hash);return false;});});</script>
<script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=363&amp;locationId=1957998&amp;lang=<?php echo $sf_params->get('sf_culture')?>&amp;year=2016&amp;display_version=2"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16729802-1', 'auto');
  ga('send', 'pageview');

</script>
<script type='text/javascript'>
  var paxer = {};
  paxer.secret = 'JFL9VF';
  paxer.iframeType = 'BOTH';
  paxer.triggerButton = '';  // Coloque aquí el id del botón o link de reservas de su sitio web
  paxer.widgetTheme = 'custom';
  paxer.widgetOrientation = 'horizontal'; 
  paxer.widgetColors = {"colorHeader1":"#c2bc00","colorHeader2":"#3b3a3a","colorBody1":"#f4f4f4","colorBody2":"#666666"};
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
</body>
</html>