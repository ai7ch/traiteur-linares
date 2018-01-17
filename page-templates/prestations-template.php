<?php 
/*
Template Name: Linares Prestations
*/ 
?>
<?php 
	get_header();

 	$thumb_buffet_uri = get_field("thumbnail_buffet"); 
 	$thumb_cocktail_uri = get_field("thumbnail_cocktails"); 
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
							<div class="col-md-6">
								<div class="thumbnail">
									<img src="<?php echo $thumb_buffet_uri["sizes"]["large"]?>" alt="<?php echo $thumb_buffet_uri["alt"]?>">
								</div>
							</div>
							<div class="col-md-6">								
								<?php 
									echo the_field("text_buffet");
								 ?>								
							</div>							
						</div>
						<blockquote>
							<p class="text-left">
								<?php echo the_field("options_buffet"); ?>
							</p>
						</blockquote>
					</div>
					<div role="cocktails" class="tab-pane" id="cocktails">

					</div>
					<div role="plats chauds et repas" class="tab-pane" id="plats-chauds">
						Plats Chauds
					</div>
				</div>
 			</div>
 		</div>
 	</section>
</div>
<?php get_footer(); ?>