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
	 			<?php 
	 				while (have_posts()){ 
	 					the_post();
	 					$contents = the_content();
	 					echo $contents;
	 				}
	 			 ?>


	 			<div id="infos-contact-container">
	 				<pre>	 					
	 					<?php print_r($contact_info_fields); ?>
	 				</pre>
	 				<div id="infos-contact-wrapper">
		 				<div class="text-contact">
		 					<p>text</p>
		 				</div>
		 				<div id="address">
		 					<p>address</p>
		 				</div>
		 				<div id="form">
		 					<?php echo do_shortcode($contact_info_fields["form"]) ?>
		 				</div>
	 				</div> <!--#infos-contact-wrapper -->
	 			</div> <!--#infos-contact-container -->
 			</div> <!--#contact-container -->
 		</div>
 	</section>
 </div>
<?php get_footer(); ?>