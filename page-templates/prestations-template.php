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
 	$menu_plats_chauds = get_field("menu_plats_chauds");
 	$menu_head = [
 		"entrees" 	=> "Entrées",
 		"plats"		=> "Plats",
 		"desserts" 	=> "Desserts"
 	]
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
 			<div id="tab-prestations-container">
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
								<blockquote>
									<p class="text-left">
										<?php echo the_field("options_buffet"); ?>
									</p>
								</blockquote>
							</div>
							<div class="col-md-7 prestations-desc-complet">
								<?php echo the_field("text_buffet");?>
								<div class="badge-prix-prestations">
									<img src="<?php echo $thumb_badge_prix_buffet["sizes"]["large"]?>" alt="<?php echo $thumb_badge_prix_buffet["alt"] ?>">
								</div>
							</div>							
						</div>
					</div><!-- #buffets-->
					<div role="cocktails" class="tab-pane" id="cocktails">
						<p class="prestations-desc">
							<?php echo the_field("desc_cocktails"); ?>
						</p>
						<div class="row prestations-text">
							<div class="col-md-5">
								<div class="thumbnail">
									<img src="<?php echo $thumb_cocktail_uri["sizes"]["large"]?>" alt="<?php echo $thumb_cocktail_uri["alt"]?>">
								</div>
								<blockquote>
									<p class="text-left">
										<?php echo the_field("options_cocktails"); ?>
									</p>
								</blockquote>
							</div>
							<div class="col-md-7 prestations-desc-complet">
								<?php echo the_field("text_cocktails");?>
								<div class="badge-prix-prestations">
									<img src="<?php echo $thumb_badge_prix_cocktail["sizes"]["large"]?>" alt="<?php echo $thumb_badge_prix_cocktail["alt"] ?>">
								</div>
							</div>							
						</div>
					</div><!-- #cocktails-->
					<div role="plats chauds et repas" class="tab-pane" id="plats-chauds">
						<p class="plats-chauds-desc">
							<?php echo the_field("desc_plats_chauds"); ?>
						</p>
						<div class="row plats-chauds-text">
							<div class="col-md-5">
								<div class="thumbnail">
									<img src="<?php echo $thumb_plats_chauds_uri["sizes"]["large"]?>" alt="<?php echo $thumb_plats_chauds_uri["alt"]?>">
								</div>						
								<blockquote>
									<p class="text-left">
										<?php echo the_field("options_plats_chauds"); ?>
									</p>
								</blockquote>
							</div>
							<div class="col-md-7 prestations-desc-complet">
								<div class="panel-group" id="liste-menus-chauds" role="tablist" aria-multiselectable="true">
								<?php foreach ($menu_plats_chauds as $id_menu => $menus): ?>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-menu-<?=$id_menu?>">
											<h4 class="panel-title">
											    <a role="button" data-toggle="collapse" data-parent="#liste-menus-chauds" href="#collapse-menu-<?=$id_menu?>" aria-expanded="true" aria-controls="collapse-menu-<?=$id_menu?>">
											    	Example menu <?=($id_menu+1); ?>
											    </a>
											</h4>
										</div>
										<div id="collapse-menu-<?=$id_menu?>" class="panel-collapse collapse <?php echo ($id_menu === 0) ? "in" : ""?>" role="tabpanel" aria-labelledby="heading-menu-<?=$id_menu?>">
											<div class="panel-body row liste-menus-container">
												<?php foreach ($menus as $key => $value): ?>
												<?php 
													//by escaping price badge 
													//loop through the list of the menu item
													if ($key !== "badge_prix_menu"): ?>
												<ul class="list-group list-unstyled col-md-4 list-menus">
													<?php 
													//print menu headings
													//Escape menu price badge 
													echo (isset($menu_head[$key])) ? "<li class='list-group-item active'>".$menu_head[$key]."</li>" : "" ?>
													<?php foreach ($value["liste_nom_".$key] as $info_menu): ?>
														<li>
															<?=$info_menu["nom"] ?>
														</li>
													<?php endforeach ?>
												</ul>
												<?php endif ?>
												<?php if($key === "badge_prix_menu"): ?>
												<div class="badge-prix-plats-chauds col-md-5" style="width: 100px !important; ">
													<img src="<?php echo $menus[$key]["sizes"]["large"]?>" alt="<?php echo $menu[$key]["alt"] ?>">
												</div>
												<?php endif; ?>
												<?php endforeach ?>
											</div>
										</div>
									</div>
								<?php endforeach ?>
								</div><!--#liste-menus-chauds-->
							</div><!-- .plats-chauds-desc-complet -->
						</div>
					</div><!-- #plats-chauds-->
				</div> <!--.tab-content -->
 			</div>
 		</div>
 	</section>
</div>
<?php get_footer(); ?>