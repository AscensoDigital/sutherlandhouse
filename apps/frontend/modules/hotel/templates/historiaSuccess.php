<?php use_stylesheet('seccion.css') ?>
<?php slot('title', __('Historia de Sutherland - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("Historia Sutherland House, The Mackay School, Hotel Boutique Sutherland House"))?>
<?php slot('description', __("Se cuenta quien fue George Sutherland y por que se nombre el hotel así."))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'historia', 'title' => 'Historia', 'imagenes' => $galeria)))?>
<div id="columna1">
<h2><?php echo __('Historia') ?></h2>
<p><?php echo __('El hotel Sutherland House debe su nombre a George Sutherland, quien llegó a Chile en 1861, desde el “Moray House Training College” de Edimburgo, Escocia,
para colaborar con Peter Mackay en el “Artizan College”, en la tarea de educar a los hijos de las familias británicas que trabajaban en Valparaíso.') ?></p>
<p><?php echo __('Con posterioridad, ambos educadores y el pintor Thomas Somerscales se separan por diferencias religiosas de ese colegio, iniciando en 1877 el “Mackay and Sutherland School”.') ?>
<?php echo __('La sociedad educacional de “Mackay &amp; Sutherland” en el año 1882 compró al Banco de Valparaíso los terrenos donde se encuentra el actual Hotel Boutique Sutherland House.') ?></p>
</div>
<div id="columna2">
<p><?php echo __('Este es una casona de típico estilo inglés, construida en 1870 la cual sirvió de Rectoría al establecimiento.') ?> <?php echo __('En el año 1893, George Sutherland adquiere los derechos de la propiedad como único dueño.') ?></p>
<p><?php echo __('A la muerte de Mackay; Sutherland y el nuevo profesor George Robertson deciden renombrar al colegio como “The Mackay English School”, como homenaje póstumo.') ?></p>
<p><?php echo __('Actualmente, a un costado del acceso principal a la sede de “The Mackay School” en Reñaca, Viña del Mar, se pueden observar los bustos de tres personalidades
de gran importancia para el desarrollo de esa institución. Se trata de los profesores Peter Mackay, George Sutherland y George Robertson.') ?></p>
</div>