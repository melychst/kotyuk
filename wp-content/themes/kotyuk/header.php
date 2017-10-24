<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header>
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo">
							<a href="/"><img src="<?php echo get_stylesheet_directory_uri() . "/img/logo.png" ?>" alt=""></a>
						</div>
					</div>
					<div class="col-md-8">
						<nav>
							<?php
								wp_nav_menu(array(
										'theme_location' => 'main-menu', 
										'menu' => 'main-menu', 
										'container'=> '',
								));
							?>		
						</nav>
					</div>					
				</div>
			</div>			
		</div>

		<?php
			if ( is_front_page()  ) {
				$backgroundUrl = get_field("header_video_link");
		?>
			<div class="video-section">
				<video autoplay muted loop>
      		<source src="<?php echo $backgroundUrl ?>" type="video/mp4">
    		</video>
			</div>

		<?php
			} else {
				$backgroundUrl = get_the_post_thumbnail_url();
		?>
		
			<div class="header-section" style="background-image: url(<?php echo $backgroundUrl; ?>)">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h1><?php the_title(); ?></h1>
							</div>					
						</div>					
					</div>
				</div>
			</div>		

		<?php		
			}
		?>

	</header>