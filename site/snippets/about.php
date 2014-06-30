<!-- ABOUT SECTION -->
<section id="about">
	<article>
		<?php $skills = yaml($section->skills()); ?>

		<h1 class="section-header">About Me</h1>
		<img id="profilepic" src="<?php echo url('/assets/images/profilePic.png') ?>">
		<div class="main-text anim-slideup-init">
			<?php echo kirbytext($section->text()); ?>
		</div>
		<div class="skills-wrapper">
			<?php foreach($skills as $skill): ?>
			<div class="skill-block">
				<div class="skill-label"><?php echo $skill['name'] ?></div> <div class="skill-level"><div class="graph-<?php echo $skill['skill'] ?> anim-slideright-init"></div></div>
			</div>
			<?php endforeach ?>
		</div>

		<div class="clearfix"></div>
			
		<div class="button">
			<span class="button-label">View Full Resume</span>
			<div class="icon-button icon-expand"></div>
		</div>

	
	</article>
	<?php snippet('resume') ?>
	<div class="clearfix"></div>
</section>