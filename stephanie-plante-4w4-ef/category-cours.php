<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">
	
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Cours</h1>
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="coursSession">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			//global $tProprieté;
			while ( have_posts() ) :
				the_post();
                convertirTableau($tPropriété);
				//print_r($tPropriété);
				if ($tPropriété['session'] != $precedent): 
					if ("XXXXXX" != $precedent)	: ?>
					</section>
					<?php if (in_array($precedent, ['1', '2', '3','4','5','6'])) : ?>
							<section>
								
							</section>
					<?php endif; ?>
				<?php endif; ?>
				<h1><?php echo $tPropriété['session'] ?></h1>
				<section class="Session" <?php echo class_composant($tPropriété['session']) ?>>
			<?php endif ?>	
			<?php if (in_array($tPropriété['session'], ['1', '2', '3','4','5','6']) ) : 
					get_template_part( 'template-parts/content', 'cours' ); 
					elseif (in_array($tPropriété['sigle'], ['582-4MB', '582-5JA', '582-5JB','582-5MB']) ):
						get_template_part( 'template-parts/content', 'cours-sigle' );  
			endif;	
			$precedent = $tPropriété['session'];
			endwhile;?>
				
				
			</section> <!-- fin section cours -->
			<?php	endif; ?>
	
	</main><!-- #main -->

<?php 
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-6,6);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}


function class_composant($typeCours){

	
}

