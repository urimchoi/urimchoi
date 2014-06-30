
<div id="top-header"><a class="logo-button" href="<?php echo $site->url() ?>/#intro" ></a></div>
<nav id="mobile-nav">
	<div class="nav-button icon-menu"> </div>
	<ul class="mobile-menu">
	<?php foreach($pages->visible() as $p): ?>
		<li>
			<a href="<?php echo $site->url() ?>/#<?php echo $p->title() ?>" class="icon-<?php echo $p->title() ?>"></a>
		</li>
 	<?php endforeach ?>
 	</ul>
</nav>

<nav id="desktop-nav">
	<ul class="vertical-align-center">
	<?php foreach($pages->visible() as $p): ?>
		<li>
			<a href="<?php echo $site->url() ?>/#<?php echo $p->title() ?>" class="icon-<?php echo $p->title() ?>"></a>
			<div class="nav-tooltip"><?php echo $p->title() ?></div>
		</li>
 	<?php endforeach ?>
 	</ul>
</nav>