<?php
/**
 * Template Name: Nouveau café
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9
 */
get_header();
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/new-coffee.php';
?>
<?php if(isset($saved)):?>
<script>
    window.location.href = "<?=$saved?>";
</script>
<?php endif; ?>
<?php do_action( 'spacious_before_body_content' ); ?>
    
	<div id="primary">
		<div id="content" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();

				?>
                <div class="form-container">
                    <form action="" method="post" style="width: 90%;">
                        <div class="form-group" style="border-top: 7px solid #0fbe7c;">
                            <h1>Lancer un nouveau Café technologique</span></h1>
                            <div class="cafe-content">
                                <p class="cafe-description">
                                    Café technologique est un évènement gratuit et très enrichissant pour les passionnés de l'informatique.
                                </p>
                            </div>
                            <hr>
                            <div class="required">
                                <span style="color: red;">*Obligatoire</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>
                                Intitulé
                                <span style="color: red;">*</span>
                            </h3>
                            <div class="form-item w-50">
                                <input type="text" name="coffee_title" id="coffee_title" class="form-ctrl w-100" placeholder="Votre reponse" required>
                            </div>
                            <div class="invalid-feedback">Cette question est obligatoire.</div>
                        </div>
                        <div class="form-group">
                            <h3>
                                Date
                                <span style="color: red;">*</span>
                            </h3>
                            <div class="form-item w-50">
                                <input type="date" name="coffee_date" id="coffee_date" class="form-ctrl w-100" placeholder="Votre reponse" required>
                            </div>
                            <div class="invalid-feedback">Cette question est obligatoire.</div>
                        </div>
                        <div class="form-item">
                            <input type="submit" name="submit" class="btn btn-submit" value="Envoyer">
                        </div>
                    </form>
                </div>
                <?php

			endwhile;
			?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
