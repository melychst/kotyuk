<?php
	$idCategoryTestimonial = get_field('category_testimonials');

	$termsArray = array();

	if ( count($idCategoryTestimonial) > 0 ) {
		foreach ( $idCategoryTestimonial as $id ) {
			array_push($termsArray, $id);
		}
	}
	$args = array(
			'post_type' => 'testimonial',
			'tax_query' => array(
					array(
						'taxonomy' => 'category_testimonial',
						'field'    => 'id',
						'terms'    => $termsArray,
					)
				)
			);

	$testimonials = new Wp_Query($args);
?>

<div class="testimonials">
	<div class="container">
		<div class="main-content">
			<?php
				if ( $testimonials->have_posts() ):
					while ( $testimonials->have_posts() ) :  $testimonials->the_post()
			?>
					<div class="row">
						<div class="col-md-3">
							<div class="image-testimonial">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
						</div>
						<div class="col-md-9">
							<div class="testimonial">
								<div class="title"><?php the_title(); ?></div>
								<div class="content">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
			<?php
					endwhile;
					wp_reset_postdata();
				endif;

			?>		
		</div>
	</div>
</div>