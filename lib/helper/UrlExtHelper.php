<?php sfContext::getInstance()->getConfiguration()->loadHelpers(array('Asset','Url','Tag'));
function link_to_upload($name='',$upload_uri='',$options=array())
{
  $html_options = _parse_attributes($options);

  $html_options = _convert_options_to_javascript($html_options);

  $absolute = false;
  if (isset($html_options['absolute_url']))
  {
    $html_options['absolute'] = $html_options['absolute_url'];
    unset($html_options['absolute_url']);
  }
  if (isset($html_options['absolute']))
  {
    $absolute = (boolean) $html_options['absolute'];
    unset($html_options['absolute']);
  }

  $html_options['href'] = upload_path($upload_uri, $absolute);

  if (isset($html_options['query_string']))
  {
    $html_options['href'] .= '?'.$html_options['query_string'];
    unset($html_options['query_string']);
  }

  if (is_object($name))
  {
    if (method_exists($name, '__toString'))
    {
      $name = $name->__toString();
    }
    else
    {
      throw new sfException(sprintf('Object of class "%s" cannot be converted to string (Please create a __toString() method)', get_class($name)));
    }
  }

  if (!strlen($name))
  {
    $name = $html_options['href'];
  }

  return content_tag('a', $name, $html_options);
  //printf('<a onclick="window.open(this.href);return false;" href="%s">%s</a>', upload_path($upload_uri), $name)."\n";
}


function link_image_to($source, $internal_uri='', $options_img=array(), $options_link=array())
{
  return link_to(image_tag($source,$options_img),$internal_uri,$options_link);
}

function link_image_with_text_to($source, $text ='', $internal_uri='', $options_img=array(), $options_link=array())
{
  return link_to(image_tag($source,$options_img)." ".$text,$internal_uri,$options_link);
}

function link_swap_img_to($source, $swap, $internal_uri='', $options_img=array(), $options_link=array())
{
  sfContext::getInstance()->getResponse()->addJavascript('/js/cambiarImagen.js');
  $options_img = _parse_attributes($options_img);
  $options_link = _parse_attributes($options_link);

  $path_pos = strrpos($source, '/');
  $dot_pos = strrpos($source, '.');
  $begin = $path_pos ? $path_pos + 1 : 0;
  $nb_str = ($dot_pos ? $dot_pos : strlen($source)) - $begin;
  $options_img['name'] = ucfirst(substr($source, $begin, $nb_str));

  $options_link['onmouseover']="MM_swapImage('".$options_img['name']."','','".image_path($swap)."',1);";
  $options_link['onmouseout']="MM_swapImgRestore();";

  return link_image_to($source,$internal_uri,$options_img,$options_link);
}

function mail_image_to($source, $email, $option_img = array(), $option_mail = array(), $default_mail = array())
{
  return mail_to($email,image_tag($source,$option_img),$option_mail,$default_mail);
}

function mail_swap_img_to($source, $swap, $email, $options_img=array(), $options_mail=array(), $default_mail = array())
{
  sfContext::getInstance()->getResponse()->addJavascript('/js/cambiarImagen.js');
  $options_img = _parse_attributes($options_img);
  $options_mail = _parse_attributes($options_mail);

  $path_pos = strrpos($source, '/');
  $dot_pos = strrpos($source, '.');
  $begin = $path_pos ? $path_pos + 1 : 0;
  $nb_str = ($dot_pos ? $dot_pos : strlen($source)) - $begin;
  $options_img['name'] = ucfirst(substr($source, $begin, $nb_str));

  $options_mail['onmouseover']="MM_swapImage('".$options_img['name']."','','".image_path($swap)."',1);";
  $options_mail['onmouseout']="MM_swapImgRestore();";

  return mail_image_to($source,$email,$options_img,$options_mail,$default_mail);
}

function link_image_to_upload($source, $upload_uri='', $options_img=array(), $options_link=array())
{
  return link_to_upload(image_tag($source,$options_img),$upload_uri,$options_link);
}