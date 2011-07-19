<ul><li><?php echo link_image_to('espanol.png',
          array('module' => 'language', 'action' => 'changeLanguage', 'new_language' => 'es', 'modulo' => $sf_params->get('module'), 'accion' => $sf_params->get('action')), 
          array('size' => '17x25', 'title' => __('Español'), 'alt' => __('español')))?></li>
<li><?php echo link_image_to('english.png',
          array('module' => 'language', 'action' => 'changeLanguage', 'new_language' => 'en', 'modulo' => $sf_params->get('module'), 'accion' => $sf_params->get('action')), 
          array('size' => '17x25', 'title' => __('Inglés'), 'alt' => __('inglés')))?></li>
<li><?php echo link_image_to('frances.png',
          array('module' => 'language', 'action' => 'changeLanguage', 'new_language' => 'fr', 'modulo' => $sf_params->get('module'), 'accion' => $sf_params->get('action')), 
          array('size' => '17x25', 'title' => __('Francés'), 'alt' => __('francés')))?></li>
<li><g:plusone></g:plusone></li></ul>
