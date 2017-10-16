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
					<div class="col-md-3">
						<div class="logo">
							<a href="/"><img src="<?php /*echo get_stylesheet_directory_uri() . "/img/logo.png"*/ ?>" alt="">Nataliya Kotyuk</a>
						</div>
					</div>
					<div class="col-md-9">
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
		<div class="video-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h1>Nataliya Kotyuk</h1>
						</div>					
					</div>					
				</div>
			</div>
		</div>
	</header>