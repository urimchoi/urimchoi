<?php snippet('header-basic') ?>

<!-- WORK MODEL SECTION -->

<section id="project">
	<article class="reveal">
		<h2 class="section-header"><?php echo $page->title() ?></h2>

		<?php echo kirbytext($page->description()) ?>

		<a href="<?php echo $page->externallink() ?>" class="button" target="_blank">View Website <span class="icon-link-ext"></span></a>
		
		<div class="clearfix">
			<img src="<?php echo $page->files()->find('mockup.png')->url() ?>">
		</div>

		<div class="clearfix more-details">
			<div class="background"></div>
			<div class="feature-list">
				<h2>Features list:</h2>
				<?php echo kirbytext($page->feature()) ?>
			</div>

			<div class="tech-list">
				<h2>Technologies used:</h2>
				<?php echo kirbytext($page->tech()) ?>
			</div>
		</div>

		<?php foreach($page->images()->not('mockup.png')->not('thumbnail.png') as $image): ?>
		<div class="cleafix figure <?php echo $image->direction() ?>">	
			<img class="screenshot" data-src="<?php echo $image->url() ?>">	
			<div class="caption">
				<h2><?php echo $image->title() ?></h2>
				<?php echo kirbytext($image->caption()) ?>
			</div>
		</div>
		<?php endforeach ?>


		<?php snippet('work-nav') ?>
		
	</article>
	<div class="clearfix"></div>
</section>

<?php snippet('footer') ?>