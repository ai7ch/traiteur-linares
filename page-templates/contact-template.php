<?php 
/*
Template Name: Linares Contact
*/ 
?>
<?php 
	get_header();

	//Contact informations
	$contact_info_fields = get_field("infos_contact");
?>
<div class="container">
 	<section class="row body-wrapper">
 		<div class="body-thumbnail">
 			<?php the_post_thumbnail(); ?>
 		</div>
 		<div class="body-content">
 			<div id="contact-container">
	 			<div id="contact-intro" class="parallax">
		 			<?php 
		 				while (have_posts()){ 
		 					the_post();
		 					$contents = the_content();
		 					echo $contents;
		 				}
		 			 ?>
	 			</div> <!--#infos-contact-container -->
 				<div id="infos-contact-wrapper" class="row">
 					<div class="col-md-6">
		 				<div class="text-contact">
		 					<h3>Traiteur Linares</h3>
		 					<?php if(!empty($contact_info_fields["texte_presentation"])) :?>
		 						<p><?php echo $contact_info_fields["texte_presentation"]?></p>
		 					<?php endif; ?>
		 				</div>
		 				<div id="address">
		 					<ul class="list-unstyled">
		 						<li><?php echo $contact_info_fields["adresse"]["numero_rue"] ?></li>
		 						<li><?php echo $contact_info_fields["adresse"]["code_postal"] ?></li>
		 						<li><a href="mailto:<?php echo $contact_info_fields["adresse"]["email"] ?>"><?php echo $contact_info_fields["adresse"]["email"] ?></a></li>
		 						<li itemprop="telephone"><a href="tel:<?php echo $contact_info_fields["adresse"]["phone"] ?>"><?php echo $contact_info_fields["adresse"]["phone"] ?></a></li>
		 					</ul>
		 				</div>
 					</div>
 					<div class="col-md-6">	 						
		 				<div id="form">
		 					<?php echo do_shortcode($contact_info_fields["form"]) ?>
		 				</div>
 					</div>
 					<div class="col-md-12"> 						
		 				<div id="map">
		 					<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDo3A64fY98VvBEsupGXKLHxdQuRioHuiU&q=2+Chemin+du+Moulinet%2C+13015+Marseille&attribution_source=Google+Maps+Embed+API&attribution_web_url=http://www.traiteur-linares.fr" frameborder="0"></iframe>
		 				</div>
 					</div>
 				</div> <!--#infos-contact-wrapper -->
 			</div> <!--#contact-container -->
 		</div>
 	</section>
 </div>
<?php get_footer(); ?>