<?php 
/*
Template Name: Accueil Linares
*/ 
?>
<?php 
	get_header();
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6">
 			<?php the_post_thumbnail(); ?>
 		</div>
 		<div class="col-md-6">
 			<?php 
 				while (have_posts()) : 
 					the_post();
 					$contents = get_the_content();
 					print_r($contents);
 				endwhile;
 			 ?>
 		</div>
 	</div>
 </div>
