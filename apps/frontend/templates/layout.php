<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<title><?php if(!include_slot('title')): echo __('Hotel Sutherland House - Hotel Boutique &amp; Café Valparaíso, Chile');endif?></title>
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
<?php include_slot('galeria')?>
<div id="info"><div id="TA_certificateOfExcellence651" class="TA_certificateOfExcellence">
<ul id="YOhCi2a3K" class="TA_links 60CbIyl">
<li id="tRVG17zwj" class="FXLTGo"><a href=http://www.tripadvisor.es/Hotel_Review-g294306-d1957998-Reviews-Hotel_Boutique_Sutherland_House-Valparaiso_Valparaiso_Region.html>Hotel Boutique Sutherland House</a></li>
</ul></div>
<?php echo link_image_to('reservas-es.jpg', '@reserva', array('alt' => __('Reservas'), 'title' => __('Reservas'), 'size' => '192x30'))?>
<?php echo link_image_to('mapa-es.jpg', '@hotel_ubicacion', array('alt' => __('Mapa'), 'title' => __('Mapa'), 'size' => '192x86'))?>
<?php echo link_image_to('new_year_2012_hotel_sutherland_house.jpg', '@hotel_new_year', array('alt' => __('New Year').' '.date('Y')+1, 'title' => __('New Year').' '.date('Y')+1, 'size' => '192x86'))?>  
<?php echo link_image_to('logo_cafeteria_sutherland_house.png', '@cafe', array('alt' => __('Cafetería'), 'title' => __('Cafetería'), 'size' => '192x136'))?>
<script type="text/javascript" src="http://www.booking.com/general.html?tmpl=bookit;aid=330843;lang=<?php echo $sf_params->get('sf_culture')?>;hotel_id=289904;pb=1"></script><br/>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FHotel-Boutique-Sutherland-House-Valparaiso%2F117324945005401&amp;width=196&amp;colorscheme=light&amp;show_faces=false&amp;stream=false&amp;header=false&amp;height=110" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:196px;height:110px;"></iframe>
</div>
<div id="menusuperior">
<ul>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Hotel'),'@hotel_hotel')?></li>
<li><?php echo link_to(__('Paseos'),'@hotel_paseo')?></li>
<li><?php echo link_to(__('Historia'),'@hotel_historia')?></li>
<li><?php echo link_to(__('Valparaíso'),'@hotel_valparaiso')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li class="ultimo"><?php echo link_to(__('Noticias'),'@hotel_noticia')?></li>
</ul>
</div>
<div id="inferior"><?php echo $sf_content ?></div>
<div id="pieweb"><ul>
<li class="ultimo"><?php echo link_image_to('logo_hotel_sutherland_house_chico.png','@hotel_hotel', array('size' => '35x28', 'alt' => __("Logo Hotel Boutique Sutherland House")))?></li>
<li><?php echo link_to(__('Hotel'),'@hotel_hotel')?></li>
<li><?php echo link_to(__('Habitaciones'),'@hotel_habitacion')?></li>
<li><?php echo link_to(__('Comentarios'),'@hotel_comentario')?></li>
<li><?php echo link_to(__('Reservas'),'@reserva')?></li>
<li><?php echo link_to(__('Paseos'),'@hotel_paseo')?></li>
<li><?php echo link_to(__('Valparaíso'),'@hotel_valparaiso')?></li>
<li><?php echo link_to(__('Quienes Somos'),'@hotel_quienes_somos')?></li>
<li><?php echo link_to(__('Noticias'),'@hotel_noticia')?></li>
<li class="ultimo"><?php echo link_to(__('Cafe &amp; RestoBar'),'@cafe')?></li>
<li class="ultimo"><?php echo link_image_to('logo_cafeteria_sutherland_house_chico.png','@cafe', array('size' => '40x28', 'alt' => __("Logo Café &amp; RestoBar Sutherland House")))?></li>
</ul></div>
<?php include_partial('hotel/footerContacto')?>
</div>
<?php include_javascripts() ?> 
<script type="text/javascript">jQuery(document).ready(function($){$('div.content').css('display','block');var onMouseOutOpacity=0.67;$('#thumbs ul.thumbs li').opacityrollover({mouseOutOpacity:onMouseOutOpacity,mouseOverOpacity:1.0,fadeSpeed:'fast',exemptionSelector:'.selected'});var gallery=$('#thumbs').galleriffic({delay:3500,numThumbs:12,preloadAhead:10,enableTopPager:true,enableBottomPager:true,maxPagesToShow:7,imageContainerSel:'#slideshow',controlsContainerSel:'#controls',captionContainerSel:'#caption',loadingContainerSel:'#loading',renderSSControls:true,renderNavControls:true,enableKeyboardNavigation:false,playLinkText:'<?php echo __('iniciar galería')?>',pauseLinkText:'<?php echo __('detener galería')?>',prevLinkText:' ',nextLinkText:' ',nextPageLinkText:'<?php echo __('Siguiente &rsaquo;')?>',prevPageLinkText:'<?php echo __('&lsaquo; Anterior')?>',enableHistory:false,autoStart:true,syncTransitions:true,defaultTransitionDuration:900,onSlideChange:function(prevIndex,nextIndex){this.find('ul.thumbs').children()
.eq(prevIndex).fadeTo('fast',onMouseOutOpacity).end()
.eq(nextIndex).fadeTo('fast',1.0);},onPageTransitionOut:function(callback){this.fadeTo('fast',0.0,callback);},onPageTransitionIn:function(){this.fadeTo('fast',1.0);}});function pageload(hash){if(hash){$.galleriffic.gotoImage(hash);}else{gallery.gotoIndex(0);}}
$.historyInit(pageload,"advanced.html");$("a[rel='history']").live('click',function(e){if(e.button!=0)return true;var hash=this.href;hash=hash.replace(/^.*#/,'');$.historyLoad(hash);return false;});});</script>
<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=651&amp;locationId=1957998&amp;lang=<?php echo $sf_params->get('sf_culture')?>&amp;year=2012"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-16729802-1']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script> 
</body>
</html>
