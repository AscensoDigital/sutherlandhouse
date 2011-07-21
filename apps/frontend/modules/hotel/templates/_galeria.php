<?php use_javascript('jquery.used-min.js')?>
<?php use_helper('UrlExt')?>
<div id="textogaleria">
<p><?php echo __('Galería '.$title) ?></p>
</div>
<div id="page">
<div id="container">
<div id="gallery" class="content">
<div id="controls" class="controls"></div>
<div class="slideshow-container">
<div id="loading" class="loader"></div>
<div id="slideshow" class="slideshow"></div>
</div>
<div id="caption" class="caption-container"></div>
</div>
<div id="thumbs" class="navigation">
<ul class="thumbs noscript">
<?php foreach($imagenes as $imagen):?>
<li><?php echo link_image_to_upload('/uploads/cabecera/'.$id.'/chicas/'.$imagen['foto'], 'cabecera/'.$id.'/'.$imagen['foto'], 
array('size' => '55x55', 'alt' => __($imagen['caption'])), 
array('name' => Hotel::slugify($imagen['foto']), 'class' => 'thumb', 'title' => __($imagen['caption'])))?><div class="caption"><?php echo __($imagen['caption'])?></div></li>
<?php endforeach?>
</ul></div><div style="clear: both;"></div></div></div>