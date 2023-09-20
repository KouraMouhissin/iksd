<?php
/**
 * Template Name: Liste des participants
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9
 */
get_header();
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/attendees-list.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php do_action( 'spacious_before_body_content' ); ?>
	<div id="primary">
		<div id="content" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();?>
				<div class="table-container" style="overflow: auto;">
					<h1><?=$coffee_title?></h1>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nom et prénom</th>
								<th>Adresse email</th>
								<th>Téléphone</th>
								<th>Profil</th>
								<th>Niveau d'étude</th>
								<th>Première fois</th>
								<th>Présent.e</th>
							</tr>
						</thead>
						<tbody>
							<?php if(sizeof($attendees)>0):?>
								<?php foreach($attendees as $key => $attendee):?>
									<tr>
										<td><?=(int)$key+1?></td>
										<td><?=html_entity_decode($attendee['attendees_name'])?></td>
										<td><?=html_entity_decode($attendee['attendees_email'])?></td>
										<td><?=str_replace(" ", "", html_entity_decode($attendee['attendees_phone']))?></td>
										<td><?=html_entity_decode($attendee['attendees_profil'])?></td>
										<td><?=$study_level[$attendee['attendees_study_level']]?></td>
										<td><?=$first_time[$attendee['attendees_first_time']]?></td>
										<td style="text-align: center;">
											<input type="checkbox" class="confirm" data-at="<?=$attendee['attendees_ID']?>" <?=(int) $attendee['attendees_hasconfirmed'] == 0 ? '' : 'checked'?> id="confirmed" name="confirmed">
											<input type="checkbox" class="attendee" data-at="<?=$attendee['attendees_ID']?>" <?=(int) $attendee['attendees_washere'] == 0 ? '' : 'checked'?> id="present" name="present">
										</td>
									</tr>
								<?php endforeach;?>
							<?php else: ?>
								<tr>
									<td  style="border-collapse:collapse; text-align:center" colspan="5">Aucun inscrit pour le moment</td>
								</tr>
							<?php endif;?>
						</tbody>
					</table>
				</div>
			<?php endwhile;
			?>
        </div><!-- #content -->
    </div><!-- #primary -->
	<script>
		$('.attendee').change(function(e){
			$.ajax({
				url: "/wp-content/custom-script/washere.php",
				method: "post",
				data: "attendee="+$(this).data('at'),
				success: function(data){
					if(data.err == 'false'){
						
					}
				}
			});
		});
		$('.confirm').change(function(e){
			$.ajax({
				url: "/wp-content/custom-script/hasConfirmed.php",
				method: "post",
				data: "attendee="+$(this).data('at'),
				success: function(data){
				}
			});
		});
	</script>
<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
