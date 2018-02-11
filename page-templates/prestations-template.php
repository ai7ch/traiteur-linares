<?php 
/*
Template Name: Linares Prestations
*/ 
?>
<?php 
	get_header();

	//Buffet
 	$thumb_buffet_uri = get_field("thumbnail_buffet"); 
 	$thumb_badge_prix_buffet = get_field("badge_prix_buffet");
 	//Cocktail
 	$thumb_cocktail_uri = get_field("thumbnail_cocktails");
 	$thumb_badge_prix_cocktail = get_field("badge_prix_cocktails");
 	//Plats Chauds
 	$thumb_plats_chauds_uri = get_field("thumbnail_plats_chauds");
 	
?>
<div class="container">
 	<section class="row body-wrapper">
 		<!-- <div class="col-md-6 body-thumbnail">
 			< ?php the_post_thumbnail(); ?>
 		</div> -->
 		<div class="body-content">

 			<?php 
 				while (have_posts()) : 
 					the_post();
 					$contents = the_content();
 					echo $contents;
 				endwhile;
 			 ?>
 			<div class="tab-prestations-container">
 				<!-- Nav tabs -->
				<ul class="nav nav-tabs" id="tab-prestations" role="tablist">
					<li role="buffets" class="active">
						<a href="#buffets" aria-controls="Buffets" role="tab" data-toggle="tab">
							Buffets
						</a>
					</li>
					<li role="cocktails">
						<a href="#cocktails" aria-controls="Cocktails" role="tab" data-toggle="tab">
							<!-- <img src="< ?php echo $thumb_cocktail_uri["sizes"]["medium"]?>" alt="< ?php echo $thumb_cocktail_uri["alt"]?>"> -->
							Cocktails
						</a>
					</li>
					<li role="plats chauds et repas">
						<a href="#plats-chauds" aria-controls="Plats-Chauds" role="tab" data-toggle="tab">
							<!-- <img src="< ?php echo $thumb_plats_chauds_uri["sizes"]["medium"]?>" alt="< ?php echo $thumb_plats_chauds_uri["alt"]?>"> -->
							Plats Chauds &amp; Repas
						</a>
					</li>
				</ul>
				<!-- Tab Contents -->
				<div class="tab-content prestations-contents">
					<div role="buffets" class="tab-pane active" id="buffets">
						<p class="prestations-desc">
							<?php echo the_field("desc_buffet"); ?>
						</p>
						<div class="row prestations-text">
							<div class="col-md-5">
								<div class="thumbnail">
									<img src="<?php echo $thumb_buffet_uri["sizes"]["large"]?>" alt="<?php echo $thumb_buffet_uri["alt"]?>">
								</div>
							</div>
							<div class="col-md-7 prestations-desc-complet">
								<?php echo the_field("text_buffet");?>
								<div class="badge-prix-prestations">
									<img src="<?php echo $thumb_badge_prix_buffet["sizes"]["large"]?>" alt="<?php echo $thumb_badge_prix_buffet["alt"] ?>">
								</div>
							</div>							
						</div>
						<blockquote>
							<p class="text-left">
								<?php echo the_field("options_buffet"); ?>
							</p>
						</blockquote>
					</div>
					<div role="cocktails" class="tab-pane" id="cocktails">
						<p class="prestations-desc">
							<?php echo the_field("desc_cocktails"); ?>
						</p>
						<div class="row prestations-text">
							<div class="col-md-5">
								<div class="thumbnail">
									<img src="<?php echo $thumb_cocktail_uri["sizes"]["large"]?>" alt="<?php echo $thumb_cocktail_uri["alt"]?>">
								</div>
							</div>
							<div class="col-md-7 prestations-desc-complet">
								<?php echo the_field("text_cocktails");?>
								<div class="badge-prix-prestations">
									<img src="<?php echo $thumb_badge_prix_cocktail["sizes"]["large"]?>" alt="<?php echo $thumb_badge_prix_cocktail["alt"] ?>">
								</div>
							</div>							
						</div>
						<blockquote>
							<p class="text-left">
								<?php echo the_field("options_cocktails"); ?>
							</p>
						</blockquote>
					</div>
					<div role="plats chauds et repas" class="tab-pane" id="plats-chauds">
						<p class="plats-chauds-desc">
							<?php echo the_field("desc_plats_chauds"); ?>
						</p>
						<div class="row plats-chauds-text">
							<div class="col-md-5">
								<div class="thumbnail">
									<img src="<?php echo $thumb_plats_chauds_uri["sizes"]["large"]?>" alt="<?php echo $thumb_plats_chauds_uri["alt"]?>">
								</div>
							</div>
							<div class="col-md-7 plats-chauds-desc-complet">
								
							</div>							
						</div>
						<blockquote>
							<p class="text-left">
								<?php echo the_field("options_plats_chauds"); ?>
							</p>
						</blockquote>
					</div>
				</div>
 			</div>
 		</div>
 	</section>
</div>
<?php get_footer(); ?>