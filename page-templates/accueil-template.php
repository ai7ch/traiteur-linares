<?php 
/*
Template Name: Linares Accueil
*/ 
?>
<?php 
	get_header();
 ?>
 <div class="container">
 	<section class="row body-wrapper">
 		<div class="col-md-6 body-thumbnail">
 			<?php the_post_thumbnail(); ?>
 		</div>
 		<div class="col-md-6 body-content">
 			<?php 
 				while (have_posts()) : 
 					the_post();
 					$contents = the_content();
 					echo $contents;
 				endwhile;
 			 ?>
 			 <ul class="list-inline cta-list-nav">
 			 	<li>Nos Prestations</li>
 			 	<li>Nos Engagements</li>
 			 	<li>Contactez-Nous</li>
 			 </ul>
 		</div>
 	</section>
 </div>
 <?php get_footer(); ?>
