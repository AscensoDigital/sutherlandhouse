<?php

function upload_path($source, $absolute = false)
{
  $src='/uploads/'.$source;
  return image_path($src,$absolute);
}

function upload_tag($source, $options = array())
{
  $src='/uploads/'.$source;
  return image_tag($src,$options);
}

function upload_file_path($source)
{
  $src= sfConfig::get('sf_upload_dir').'/'.$source;
  return $src;
}

function image_script_tag($uri, $options = array())
{
   if (!$uri)
  {
    return '';
  }

  $options = _parse_attributes($options);

  $absolute = false;
  if (isset($options['absolute']))
  {
    unset($options['absolute']);
    $absolute = true;
  }

  $options['src'] = url_for($uri, $absolute);

  if (!isset($options['alt']))
  {
    $path_pos = strrpos($uri, '/');
    $dot_pos = strrpos($uri, '.');
    $begin = $path_pos ? $path_pos + 1 : 0;
    $nb_str = ($dot_pos ? $dot_pos : strlen($uri)) - $begin;
    $options['alt'] = ucfirst(substr($uri, $begin, $nb_str));
  }

  if (isset($options['size']))
  {
    list($options['width'], $options['height']) = split('x', $options['size'], 2);
    unset($options['size']);
  }

  return tag('img', $options);
}