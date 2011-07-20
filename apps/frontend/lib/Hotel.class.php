<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hotel
 *
 * @author claudio
 */
class Hotel {
  private static $galerias = array('hotel' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'habitaciones' => array(array('caption' => 'Vista Habitación 301 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house.jpg'),
                                             array('caption' => 'Habitación 201 y 302 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house02.jpg'),
                                             array('caption' => 'Habitación Doble 201 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house03.jpg'),
                                             array('caption' => 'Habitación 303 y 204 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house04.jpg'),
                                             array('caption' => 'Habitación Doble 203 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house05.jpg'),
                                             array('caption' => 'Habitación 301 y 101 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house06.jpg'),
                                             array('caption' => 'Habitación 304 Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house07.jpg'),
                                             array('caption' => 'Baño Tipo Hotel Boutique Sutherland House.', 'foto' => 'habitacion_hotel_sutherland_house08.jpg'),
                                             array('caption' => 'Cerraduras Habitaciones Hotel Boutique Sutherland House.', 'foto' => 'puertas_habitacion_hotel_sutherland_house09.jpg')),
                            'historia' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'newyear' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'paseos' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'desayuno' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'quienessomos' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')),
                            'valparaiso' => array(array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => ''),
                                             array('caption' => '', 'foto' => '')));
  
                                              
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
}

?>
