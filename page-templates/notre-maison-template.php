<?php 
/*
Template Name: Linares Notre Maison
*/ 
?>
<?php get_header();?>
<div class="container">
 	<section class="row body-wrapper">
 		<div class="body-thumbnail">
 			<?php //the_post_thumbnail(); ?>
 		</div>
 		<div class="body-content">
 			<div class="row">
 				<div class="col-md-12">
 					<blockquote>
 						<label>
 							Traiteur Linares, partenaire de tous vos buffets et cocktails
 						</label>
 						<label>
 							Le souci en moins, la convivialité en plus
 						</label>
 					</blockquote>
 				</div>
 				<div class="col-md-4">
 					<h3>Traiteur Linares, partenaire de tous vos buffets et cocktails</h3>
 					<p>Pâtissier de formation, Xavier Linares a débuté comme chocolatier avant de proposer ses services comme traiteur à Marseille, avec un succès immédiat.</p>
 					<p>Son amour pour la cuisine, sa connaissance des produits, sa rigueur et sa créativité lui permettent de proposer pour toutes les occasions des buffets savoureux qui font le plaisir des convives.</p>
 					<p>Fraîcheur des produits, recettes goûteuses, et qualité de la présentation sont ses ingrédients de choix pour répondre à vos attentes.</p>
 				</div>
 				<div class="col-md-4">
 					<img src="http://localhost/projects/traiteur-linares.fr/wp-content/uploads/2018/02/page-notre_maison.jpg" alt="hey hi">
 				</div>
 				<div class="col-md-4">
 					<h3>Le souci en moins, la convivialité en plus</h3>
 					<p>Chez Traiteur Linares, nous nous faisons un plaisir de vous concocter des buffets adaptés à vos événements professionnels ou familiaux.</p>
 					<p>A l’écoute de vos besoins et dans le respect de votre budget, nous nous mettons en quatre pour vous proposer des buffets originaux, pour des moments de convivialité réussis. Régaler vos convives est notre plus belle récompense.</p>
 				</div>
 			</div>
 			<?php 
 				while (have_posts()) : 
 					the_post();
 					the_content();
 				endwhile;
 			 ?>
 		</div>
 	</section>
 </div>
<?php get_footer(); ?>