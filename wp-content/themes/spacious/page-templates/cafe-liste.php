<?php
/**
 * Template Name: Liste des cafés
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9
 */
get_header();
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/coffee-liste.php';
?>

<?php do_action( 'spacious_before_body_content' ); ?>
	<style>
		.coffee.list-group li{
			display: flex;
    		justify-content: space-between;
		}
	</style>
	<div id="primary">
		<div id="content" class="clearfix">
			<div class="form-container">
				<?php while ( have_posts() ) : the_post();?>
					<div style="width: 90%;">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Intitulé</th>
									<th>Date</th>
									<th>Statut</th>
									<th>Inscrits</th>
									<th>Présents</th>
								</tr>
							</thead>
							<tbody>
								<?php if(sizeof($coffees)>0):?>
									<?php foreach($coffees as $coffee):?>
										<tr>
											<td><?=$coffee['coffee_id']?> - <?=html_entity_decode($coffee['coffee_title'])?></td>
											<td><?=html_entity_decode($coffee['c_date'])?></td>
											<td><?=$coffee['coffee_status'] == 'soon' ? 'A venir' : 'Terminé'?></td>
											<td>
												<a href="/index.php/liste-des-participants/?coffee=<?=$coffee['coffee_id']?>" style="text-decoration: underline;">
													<?php
														$attendees = (int) $database->select("SELECT COUNT(DISTINCT(wp_attendees.attendees_email)) as attendees FROM wp_attendees WHERE coffee_id = ?", [$coffee['coffee_id']])->fetch()['attendees'];
														echo $attendees.' participant'.($attendees > 1 ? 's' : '');
													?>
												</a>
											</td>
											<td>
												<a href="#">
													<?php
														$presents = presentList($coffee['coffee_id']);
														echo $presents.' présent'.($presents > 1 ? 's' : '');

													?>
												</a>
											</td>
										</tr>
									<?php endforeach;?>
								<?php else: ?>
									<tr>
										<td  style="border-collapse:collapse; text-align:center" colspan="4">Aucun inscrit pour le moment</td>
									</tr>
								<?php endif;?>
							</tbody>
						</table>
						<div class="add-new" style="text-align: right; margin-bottom: 1rem">
							<a href="/index.php/ajouter-un-nouveau-cafe/" class="btn btn-submit">Lancer un nouveau café</a>
						</div>
					</div>
				<?php endwhile;?>
			</div><!-- .coffe-list-container -->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
