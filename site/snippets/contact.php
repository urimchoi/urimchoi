<!-- CONTACT SECTION -->
<section id="contact">
	<article class="contact">
		<h1><?php echo $section->title() ?></h1>
		<div class="main-text anim-slideup-init"><?php echo kirbytext($section->text()) ?></div>
		<div class="icon-location-1 anim-slideup-init"> <?php echo $section->location() ?></div>
		<hr/>
		<ul class="social-icon-list">
			<li class="anim-slideup-3"><a class="icon-github social-icon-circle" href="//www.github.com/urimchoi" target="_blank"></a></li>
			<li class="anim-slideup-init"><a class="icon-facebook social-icon-circle" href="//www.facebook.com/<?php echo $section->facebook() ?>" target="_blank"></a></li>
			<li class="anim-slideup-init"><a class="icon-linkedin social-icon-circle" href="//www.linkedin.com/in/<?php echo $section->linkedin() ?>" target="_blank"></a></li>
			<li class="anim-slideup-init"><a class="icon-mail-1 social-icon-circle" href="mailto:<?php echo $section->email() ?>"></a></li>
		</ul>
	</article>


</section>