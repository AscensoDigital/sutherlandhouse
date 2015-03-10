<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<title><?php if(!include_slot('title')): echo __('Hotel Sutherland House - Hotel Boutique, Valparaíso, Chile');endif?></title>
<?php if(has_slot('title')):?><meta name="title" content="<?php include_slot('title')?>"/><?php endif?>
<?php if(has_slot('description')):?><meta name="description" content="<?php include_slot('description')?>"/><?php endif?>
<?php if(has_slot('keywords')):?><meta name="keywords" content="<?php include_slot('keywords')?>"/><?php endif?>
<link rel="shortcut icon" href="/favicon.ico"/>
<?php include_stylesheets()?>
</head>
<body>
<?php echo $sf_content ?>
<?php include_javascripts() ?>
</body>
</html>