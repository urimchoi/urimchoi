  <div id="work-nav">
  	<a href="<?php if($page->hasPrev()): ?><?php echo $page->prev()->url() ?><?php else: ?><?php echo $page->siblings()->last()->url() ?><?php endif ?>" class="back anim-slideup-init"><div class="icon-left-open-big"></div></a>
  	<a href="/urimchoi/#work" class="home anim-slideup-init"><div class="icon-work"></div></a>
  	<a href="<?php if($page->hasNext()): ?><?php echo $page->next()->url() ?><?php else: ?><?php echo $page->siblings()->first()->url() ?><?php endif ?>" class="next anim-slideup-init"><div class="icon-right-open-big"></div></a>
  </div>