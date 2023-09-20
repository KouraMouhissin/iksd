<?php
/**
 * Template Name: Inscription finished
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9
 */
get_header();
?>

<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();
			?>
			<?php if(isset($_GET['no-coffee'])):?>
				<div style="display: flex;flex-direction: column;align-items: center">
					<div class=" form-group w-75" style="border-top: 7px solid #0fbe7c; text-align: center">
						<h1>Aucun évènement</h1>
					</div>
					<hr>
				</div>
			<?php elseif(isset($_GET['already-registered'])):?>
				<div style="display: flex;flex-direction: column;align-items: center">
					<div class=" form-group w-75" style="border-top: 7px solid #0fbe7c; text-align: center">
						<h1>Vous êtes déjà inscrit à ce café</h1>
					</div>
					<hr>
				</div>
			<?php else:?>
				<div style="display: flex;flex-direction: column;align-items: center">
					<div class=" form-group w-75" style="border-top: 7px solid #0fbe7c; text-align: center">
						<h1>Inscription réussi</h1>
					</div>
					<hr>
				</div>
			<?php endif;?>
			<?php
			endwhile;
			?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
