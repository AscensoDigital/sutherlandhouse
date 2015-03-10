<?php
/**
 * Description of Hotel
 *
 * @author claudio
 */
class Hotel {
  private static $habitaciones = array ('303' => array('url'=>'http://www.facebook.com/album.php?aid=26817&amp;id=117324945005401','alt'=>'Habitación 303 King Corner'),
                                        '201' => array('url'=>'http://www.facebook.com/album.php?aid=26570&amp;id=117324945005401','alt'=>'Habitación 201 King Terraza'),
                                        '301' => array('url'=>'http://www.facebook.com/album.php?aid=26637&amp;id=117324945005401','alt'=>'Habitación 301 King Panoramic'),
                                        '302' => array('url'=>'http://www.facebook.com/album.php?aid=26639&amp;id=117324945005401','alt'=>'Habitación 302 Suite Romantic'),
                                        '304' => array('url'=>'http://www.facebook.com/album.php?aid=26831&amp;id=117324945005401','alt'=>'Habitación 304 Suite'),
                                        '202' => array('url'=>'http://www.facebook.com/album.php?aid=26577&amp;id=117324945005401','alt'=>'Habitación 202 Suite'),
                                        '101' => array('url'=>'http://www.facebook.com/album.php?aid=26567&amp;id=117324945005401','alt'=>'Habitación 101 Suite'),
                                        '203' => array('url'=>'http://www.facebook.com/album.php?aid=26589&amp;id=117324945005401','alt'=>'Habitación 203 Doble'),
                                        '204' => array('url'=>'http://www.facebook.com/album.php?aid=26591&amp;id=117324945005401','alt'=>'Habitación 204 Doble'));
  
  private static $galerias = array('hotel' => array(array('caption' => 'Fachada Hotel Boutique Sutherland House.', 'foto' => 'fachada_hotel_sutherland_house01.jpg'),
                                             array('caption' => 'Hall Acceso y Recepción Hotel Boutique Sutherland House.', 'foto' => 'hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Desayunador Hotel Boutique Sutherland House.', 'foto' => 'comedor_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Pasillo Tercer Piso Hotel Boutique Sutherland House.', 'foto' => 'interior_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Habitaciones Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Cafetería Sutherland House.', 'foto' => 'cafeteria_sutherland_house.jpg'),
                                             array('caption' => 'Vista Nocturna desde la Recepción del Hotel Boutique Sutherland House.', 'foto' => 'recepcion_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Fachada Hotel Boutique Sutherland House.', 'foto' => 'fachada_hotel_sutherland_house01.jpg'),
                                             array('caption' => 'Vista Panorámica bahía de Valparaíso desde Hotel Boutique Sutherland House.', 'foto' => 'vista_hotel_sutherland_house.jpg')),
                            'habitaciones' => array(array('caption' => 'Vista Habitación 301 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Habitación 201 y 302 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Habitación Doble 201 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house03.jpg'),
                                             array('caption' => 'Habitación 303 y 204 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house04.jpg'),
                                             array('caption' => 'Habitación Doble 203 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house05.jpg'),
                                             array('caption' => 'Habitación 301 y 101 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house06.jpg'),
                                             array('caption' => 'Habitación 304 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house07.jpg'),
                                             array('caption' => 'Baño Tipo Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house08.jpg'),
                                             array('caption' => 'Cerraduras Habitaciones Hotel Boutique Sutherland House.', 'foto' => 'puertas_habitacion_hotel_sutherland_house09.jpg')),
                            'historia' => array(array('caption' => 'George Sutherland - Peter Mackay - George Robertson.', 'foto' => 'historia_fundadores_colegio_mackay.jpg'),
                                             array('caption' => 'Puerto de Valparaíso en el siglo XIX.', 'foto' => 'historia_valparaiso_antiguo.jpg'),
                                             array('caption' => 'Casona rectoría Colegio Mackay and Sutherland School.', 'foto' => 'historia_casona_siglo_XIX.gif'),
                                             array('caption' => 'Casa familia Corvalán Espinoza año 1960.', 'foto' => 'historia_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Casa familia Corvalán Aravena año 2000.', 'foto' => 'historia_hotel_sutherland_house03.jpg'),
                                             array('caption' => 'Casa familia Corvalán Aravena año 2000.', 'foto' => 'historia_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'En vías de ser el Hotel Boutique Sutherland House 2009.', 'foto' => 'transformacion_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Fachada hotel Boutique Sutherland House 2010.', 'foto' => 'fachada_hotel_sutherland_house01.jpg'),
                                             array('caption' => 'Comparativo con Casona Rectoría desde mismo ángulo.', 'foto' => 'historia_casona_siglo_XXI.gif')),
                            'newyear' => array(array('caption' => 'Fuegos Artificiales Año Nuevo en el Mar', 'foto' => 'new_year_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Fuegos Artificiales 200 Años Indepencia de Chile', 'foto' => 'new_year_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Fuegos Artificiales Año Nuevo desde Hotel Boutique Sutherland House', 'foto' => 'new_year_hotel_sutherland_house03.jpg'),
                                             array('caption' => 'Fuegos Artificiales 200 Años Indepencia de Chile', 'foto' => 'new_year_hotel_sutherland_house04.jpg'),
                                             array('caption' => 'Fuegos Artificiales en Valparaíso', 'foto' => 'new_year_hotel_sutherland_house05.jpg'),
                                             array('caption' => 'Fuegos Artificiales en Valparaíso', 'foto' => 'new_year_hotel_sutherland_house06.jpg'),
                                             array('caption' => 'Fuegos Artificiales en Valparaíso', 'foto' => 'new_year_hotel_sutherland_house07.jpg'),
                                             array('caption' => 'Fuegos Artificiales en Valparaíso', 'foto' => 'new_year_hotel_sutherland_house08.jpg'),
                                             array('caption' => 'Hotel Boutique en Año Nuevo 2011', 'foto' => 'new_year_hotel_sutherland_house09.jpg')),
                            'paseos' => array(array('caption' => 'Muelle Prat, Barrio Puerto.', 'foto' => 'muelle_prat_valparaiso.jpg'),
                                             array('caption' => 'Paseo Atkinson, Cerro Concepción.', 'foto' => 'casas_de_valparaiso.jpg'),
                                             array('caption' => 'Palacio Baburizza.', 'foto' => 'cerros_de_valparaiso.jpg'),
                                             array('caption' => 'Paseo 21 de Mayo.', 'foto' => 'paseo_21_de_mayo_valparaiso.jpg'),
                                             array('caption' => 'Arco Británico y Casino de Carabineros Av. Brasil.', 'foto' => 'centro_valparaiso.jpg'),
                                             array('caption' => 'Vista Nocturna Muelle Barón.', 'foto' => 'muelle_baron_valparaiso.jpg'),
                                             array('caption' => 'Lanchas del Muelle Prat para Paseos por la Bahía.', 'foto' => 'muelle_prat1_valparaiso.jpg'),
                                             array('caption' => 'Museo Naval aledaño al paseo 21 de Mayo.', 'foto' => 'museo_escuela_naval_valparaiso.jpg'),
                                             array('caption' => 'Plaza Sotomayor, Monumento a los Héroes del Combate Naval de Iquique.', 'foto' => 'plaza_sotomayor_valparaiso.jpg')),
                            'desayuno' => array(array('caption' => 'Buffet servido en salón Mackay del Hotel Boutique Sutherland House.', 'foto' => 'Desayuno Buffet Hotel Boutique Sutherland House.jpg'),
                                             array('caption' => 'Mesa ornamentada del Salón Mackay del Hotel Boutique Sutherland House.', 'foto' => 'Salon Mackay Hotel Sutherland House.jpg'),
                                             array('caption' => 'Desayuno servido en terraza del Hotel Boutique Sutherland House.', 'foto' => 'Desayuno Terraza Hotel Boutique Sutherland House.jpg'),
                                             array('caption' => 'Salón Mackay del Hotel Boutique Sutherland House.', 'foto' => 'Salon Mackay Hotel Sutherland House02.jpg'),
                                             array('caption' => 'Presentación desayuno servido en terraza del Hotel Boutique Sutherland House.', 'foto' => 'Desayuno Terraza Hotel Boutique Sutherland House02.jpg'),
                                             array('caption' => 'Salón Mackay del Hotel Boutique Sutherland House.', 'foto' => 'Salon Mackay Hotel Sutherland House03.jpg'),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'servicio' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'quienessomos' => array(array('caption' => 'Claudio Corvalán y Berta Aravena, dueños, el día de suatrimonio y Bodas de Plata.', 'foto' => 'quienes_somos_claudio_berta.jpg'),
                                             array('caption' => 'Padres de Berta y Padres de Claudio.', 'foto' => 'quienes_somos_papas_berta_claudio.jpg'),
                                             array('caption' => 'Familia Corvalán Aravena.', 'foto' => 'quienes_somos_familia_corvalan_aravena.jpg'),
                                             array('caption' => '6 de diciembre 2010, Inauguración Hotel Boutique Sutherland House.', 'foto' => 'quienes_somos_inauguracion.jpg'),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'valparaiso' => array(array('caption' => 'Valparaíso Terminal de Pasajeros (VTP).', 'foto' => 'cruceros_valparaiso.jpg'),
                                             array('caption' => 'Ascensor Artillería y Barón de Valparaíso.', 'foto' => 'ascensores_valparaiso.jpg'),
                                             array('caption' => 'Primera Zona Naval y Palacio de Justicia de Valparaíso.', 'foto' => 'arquitectura_valparaiso.jpg'),
                                             array('caption' => 'Vista del puerto desde Paseo 21 de Mayo.', 'foto' => 'vista_21_mayo_valparaiso.jpg'),
                                             array('caption' => 'Vista Nocturna Bahía de Valparaíso.', 'foto' => 'bahia_de_noche_valparaiso.jpg'),
                                             array('caption' => 'Vista Bahía de Valparaíso.', 'foto' => 'bahia_valparaiso.jpg'),
                                             array('caption' => 'Atardecer desde muelle Barón.', 'foto' => 'atardecer_valparaiso.jpg'),
                                             array('caption' => 'Muelle Prat', 'foto' => 'muelle_valparaiso.jpg'),
                                             array('caption' => 'Molo de Arribo Buques de Guerra Escuadra Nacional.', 'foto' => 'puerto_valparaiso.jpg')));
  
                                              
  static public function getGaleria($identificador)
  {
    if(!isset(self::$galerias[$identificador]))
      return null;
    
    return self::$galerias[$identificador];
  }
  
  static public function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    // trim
    $text = trim($text, '-');
    // transliterate
    if (function_exists('iconv'))
    {
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }
    // lowercase
    $text = strtolower($text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text))
    {
      return 'n-a';
    }
    return $text;
  }
  
  static public function formatterChoiceInTd($widget, $inputs)
  {
    $rows = array();
    sfContext::getInstance()->getConfiguration()->loadHelpers('UrlExt');
    foreach ($inputs as $input)
    {
      $hab=strip_tags($input['label']);
      $rows[] = $widget->renderContentTag('td',link_image_to('/uploads/habitacion/habitacion '.$hab.' Hotel Sutherland House Min.JPG', 
                                                              self::$habitaciones[$hab]['url'], 
                                                              array('size' => '60x40','alt' => self::$habitaciones[$hab]['alt']), 
                                                              array('target' => 'blank', 'title' => __('Ver galería habitación %HAB%',array('%HAB%' => $hab)))).
                                               $widget->renderTag('br').$input['label'].$widget->getOption('label_separator').$input['input'], array('align'=>'center'));
    }
    return !$rows ? '' : implode($widget->getOption('separator'), $rows);
  }
}

?>