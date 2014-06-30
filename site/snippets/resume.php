<!-- RESUME SECTION -->
<article id="resume">
	<?php $resume = $pages->find('resume') ?>
	<?php echo kirbytext($resume->text()) ?>
	<div>
		<div class="resume-skills">
			<?php echo kirbytext($resume->skills())?>
		</div>
		<div class="resume-skills">
			<?php echo kirbytext($resume->tools())?>
		</div>
		<div class="resume-skills">
			<?php echo kirbytext($resume->knowledge())?>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php if($resume->files()->find('resume.pdf')): ?><a href="<?php echo $resume->files()->find('resume.pdf')->url() ?>" class="button" target="_blank">View PDF <span class="icon-link-ext"></span></a><?php endif ?>

</article>