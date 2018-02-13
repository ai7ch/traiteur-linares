<?php 
/*
Template Name: Linares Nos Engagements
*/ 
?>
<?php get_header();?>
<div class="container">
 	<section class="row body-wrapper">
 		<div class="body-thumbnail">
 			<?php the_post_thumbnail(); ?>
 		</div>
 		<div class="body-content">
 			<?php 
 				while (have_posts()) : 
 					the_post();
 					$contents = the_content();
 					echo $contents;
 				endwhile;
 			 ?>
 		</div>
 	</section>
 </div>
<?php get_footer(); ?>