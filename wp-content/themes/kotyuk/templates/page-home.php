<div class="home-page">
	<div id="about-me">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2><?php the_field("title_about_me");?></h2>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-3">
					<?php 
						$aboutImg = get_field("image_about_me");
					?>
					<img src="<?php echo $aboutImg['url']?>" alt="<?php echo $aboutImg['alt']?>">
				</div>
				<div class="col-md-9">
					<div class="section-content">
						<?php the_field("content_about_me"); ?>						
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div id="leading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2><?php the_field("title_leading");?></h2>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-content">
						<?php the_field("content_leading");?>
					</div>
				</div>			
			</div>			
			<div class="row">
				<?php
					$leadingItems = get_field("leading_links");

					foreach ($leadingItems as $leadingItem) {
						$leadingImg = $leadingItem['image'];
				?>
					<div class="col-md-3">
						<div class="link-item">
							<div class="image">
								<img src="<?php echo $leadingImg['url']; ?>" alt="">
							</div>
							<div class="link">
								<a href="<?php echo $leadingItem['link']; ?>"><?php echo $leadingItem['link_text'];?></a>
							</div>
						</div>
					</div>
				<?php		
					}
				?>
			</div>	
		</div>	
	</div>

	<div id="muralli">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2><?php the_field("title_muralli");?></h2>
					</div>					
				</div>			
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="section-content">
						<?php the_field("content_muralli"); ?>						
					</div>
					<div class="read-more">
						<a href="<?php the_field("link_muralli"); ?>"><?php the_field("title_link_muralli"); ?></a>
					</div>
				</div>				
				<div class="col-md-3">
					<?php 
						$muralliImg = get_field("image_muralli");
					?>
					<img src="<?php echo $muralliImg['url']?>" alt="<?php echo $muralliImg['alt']?>">
				</div>

			</div>			
		</div>	
	</div>

	<div id="womans-club">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2><?php the_field("title_womens_club");?></h2>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-content">
						<?php the_field("content_womans_club");?>
					</div>
				</div>			
			</div>			
			<div class="row">
				<?php
					$womansClubItems = get_field("club_links");

					foreach ($womansClubItems as $womansItem) {
						$womansgImg = $womansItem['image'];
				?>
					<div class="col-md-3">
						<div class="link-item">
							<div class="image">
								<img src="<?php echo $womansgImg['url']; ?>" alt="">
							</div>
							<div class="link">
								<a href="<?php echo $womansItem['link']; ?>"><?php echo $womansItem['link_text'];?></a>
							</div>
						</div>
					</div>
				<?php		
					}
				?>
			</div>	
		</div>	
	</div>

	<div id="vlog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2><?php the_field("title_vlog");?></h2>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-content">
						<?php the_field("content_vlog");?>
					</div>
				</div>			
			</div>			
			<div class="row">
				<?php
					$vlogLinks = get_field("vlog_links");

					foreach ($vlogLinks as $vlogLink) {
						$link = $vlogLink['link'];
						$youtubeCode = explode('/', $vlogLink['link'] );
				?>
					<div class="col-md-6">
						<div class="vlog-item">
							<iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php echo $youtubeCode[3]; ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				<?php		
					}
				?>
			</div>
		</div>	
	</div>

	<div id="contacts">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2><?php the_field("title_contacts");?></h2>
					
				</div>
			</div>			
		</div>	
	</div>	
</div>
