<!-- ABOUT SECTION -->
<section id="work">
	<article class="work-container">
		<h1 class="section-header"><?php echo $section->title() ?></h1>
		<?php foreach($section->children()->visible() as $work): ?>
			<div class="work-block-wrapper anim-slideup-init" style="background:url('<?php echo $work->files()->find('thumbnail.png')->url() ?>') center center;background-size:cover">
				<div class="work-block" data-href="<?php echo $work->url() ?>">
					<div class="work-label">	
						<?php 
							echo "<h5>".$work->title()."</h5>";
							echo "<span class='work-tags'>".$work->tags()."</span>";
							echo "<h3>".$work->year()."</h3>";
						?> 
					</div>
				</div>
			</div>
			
		<?php endforeach ?>
		
	</article>
	<div class="clearfix"></div>
</section>