<?php
$args = array(
		'post_type' => 'post',
		'paged' => $paged,
		'caller_get_posts'=> 1
		);

$posts = new WP_Query ($args);

?>
<div class="page-blog">
	<div class="container">
		<div class="main-content">
			<div class="row">
					<?php

						if ( $posts->have_posts() ) :
							while ( $posts->have_posts() ) : $posts->the_post();
								get_template_part("/templates/article");
							endwhile;
						endif;
					?>
			</div>			
		</div>
	</div>
</div>