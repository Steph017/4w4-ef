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
<article class="coursSigle">
	
				<div class="cours_Sigle">
				<h2><?php echo $tPropriété['session'] ; ?></h2>
					<a><?php echo $tPropriété['typeCours'] ; ?></a>
					<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle']; ?></a>
                    <p><?php echo $tPropriété['nbHeure'] ; ?></p>
				</div>
</article> 

			