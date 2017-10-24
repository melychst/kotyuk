<?php
	$idCategoryTestimonial = get_field('category_testimonials');
	print_r( $idCategoryTestimonial);

	$args = array(
			'post_type' => 'testimonial',
			'category_testimonial' => 'zhenskyi-klub',
			);

	$testimonials = new Wp_Query($args);
echo "<pre>";
	print_r($testimonials);
echo "</pre>";	
?>

<div class="testimonials">
	<div class="container">
		<div class="col-md-12">
			Testimonials
		</div>
	</div>
</div>