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

<body>
	<?php snippet('sideNav') ?>
	<section id="intro">
		<article id="welcome">
			<img id="logo" src="<?php echo url('/assets/images/logo2x.png') ?>">
			<h1 class="anim-slideup-1">Urim Choi</h1>
			<h2 class="anim-slideup-2">Front End Developer</h2>
			<hr>
			<ul class="social-icon-list">
				<?php $contactPage = $pages->find('contact') ?>
				<li class="anim-slideup-3"><a class="icon-github social-icon-circle" href="//www.github.com/urimchoi" target="_blank"></a></li>
				<li class="anim-slideup-3"><a class="icon-facebook social-icon-circle" href="//www.facebook.com/<?php echo $contactPage->facebook() ?>" target="_blank"></a></li>
				<li class="anim-slideup-4"><a class="icon-linkedin social-icon-circle" href="//www.linkedin.com/in/<?php echo $contactPage->linkedin() ?>" target="_blank"></a></li>
				<li class="anim-slideup-5"><a class="icon-mail-1 social-icon-circle" href="mailto:<?php echo $contactPage->email() ?>"></a></li>
			</ul>
		</article>
	</section>