<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <!-- Set viewport for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <?php echo css('assets/styles/reset.css') ?>
  <?php echo css('assets/styles/main.css') ?>
  <?php echo css('assets/styles/font-awesome.css') ?>

  <!-- Fontello icons -->
  <?php echo css('assets/styles/fontello.css') ?>
  <!--[if IE 7]><?php echo css('assets/styles/fontello-ie7.css') ?><![endif]-->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>

<body  id="project">
	<?php snippet('sideNav') ?>