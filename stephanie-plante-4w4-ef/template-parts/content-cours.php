<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>
<article class="cours">
	
				<div class="cours_session">
				<h2><?php echo $tPropriété['session'] ; ?></h2>
					<p><?php echo $tPropriété['typeCours'] ; ?></p>
					<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle']; ?></a>
                    <p><?php echo $tPropriété['nbHeure'] ; ?></p>
				</div>
</article> 

			