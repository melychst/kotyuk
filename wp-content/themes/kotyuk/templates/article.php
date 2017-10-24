<?php
	
?>
<div class="col-md-4">
	<article>
			<div class="header">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			</div>
			<div class="body">
				<div class="title">
					<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
				</div>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
	</article>		
</div>


