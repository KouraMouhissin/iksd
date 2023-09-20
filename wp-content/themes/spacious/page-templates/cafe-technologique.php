<?php
/**
 * Template Name: Inscription au café
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9
 */
get_header();
require $_SERVER['DOCUMENT_ROOT']."/wp-content/custom-script/cuurent-coffee-id.php"
?>

<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();
			?>
			<?php if(isset($coffee_id)):?>
				<div class="form-container">
					<div class="w-75">
						<form action="/wp-content/custom-script/inscription.php" id="coffee_inscription" method="post">
							<div class="form-group" style="border-top: 7px solid #0fbe7c;">
								<h1>Café Technologique : <span class="cafe-titre"><?=$query['coffee_title']?></span></h1>
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
								<h3>Pré-requis <span style="color: red;">*</span></h3>
								<div class="radio-inline">
									<input type="radio" name="preconditions" id="preconditions" value="yes" >
									<label for="preconditions">Etre passionner des nouvelles technologies</label>
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Est-ce votre première fois de suivre un café technologique chez nous ?
									<span style="color: red;">*</span>
								</h3>
								<div class="radio-inline">
									<input type="radio" name="first_time" id="yes" value="yes">
									<label for="yes">Oui</label>
								</div>
								<div class="radio-inline">
									<input type="radio" name="first_time" id="no" value="no">
									<label for="no">Non</label>
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Nom et Prénom
									<span style="color: red;">*</span>
								</h3>
								<div class="form-item w-50">
									<input type="text" name="name" id="name" class="form-ctrl w-100" placeholder="Votre reponse" >
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Adresse e-mail
									<span style="color: red;">*</span>
								</h3>
								<div class="form-item w-50">
									<input type="email" name="email" id="email" class="form-ctrl w-100" placeholder="Votre reponse" >
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Téléphone
									<span style="color: red;">*</span>
								</h3>
								<div class="form-item w-50">
									<input type="text" name="phone" id="phone" class="form-ctrl w-100" placeholder="Votre reponse" >
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Profil
									<span style="color: red;">*</span>
								</h3>
								<div class="form-item w-100">
									<textarea name="profil" id="profil" class="form-ctrl w-100" placeholder="Votre reponse" ></textarea>
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Niveau d'étude en informatique
									<span style="color: red;">*</span>
								</h3>
								<div class="radio-inline">
									<input type="radio" name="study_level" id="l" value="l">
									<label for="l">Licence (1, 2 ou 3)</label>
								</div>
								<div class="radio-inline">
									<input type="radio" name="study_level" id="m1" value="m1">
									<label for="m1">Master 1</label>
								</div>
								<div class="radio-inline">
									<input type="radio" name="study_level" id="m2" value="m2">
									<label for="m2">Master 2</label>
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<h3>
									Pourquoi voulez-vous suivre ce café technologique ?
									<span style="color: red;">*</span>
								</h3>
								<div class="radio-inline">
									<input type="radio" name="reason" id="one" value="1">
									<label for="one">Je veux devenir développeur</label>
								</div>
								<div class="radio-inline">
									<input type="radio" name="reason" id="two" value="2">
									<label for="two">Pour enrichir mes connaissances en informatique</label>
								</div>
								<div class="radio-inline">
									<input type="radio" name="reason" id="three" value="3">
									<label for="three">Par curiosité</label>
								</div>
								<div class="invalid-feedback">Cette question est obligatoire.</div>
							</div>
							<div class="form-group">
								<a style="text-decoration:none;" href="https://www.facebook.com/iksdconsulting/">
									Suivez-nous sur facebook pour plus d'informations sur nos cafés technologiques</a>								
							</div>
						</form>
						<div class="form-item">
							<button id="submiter" class="btn btn-submit">Envoyer</button>
						</div>
					</div>
					<script>
						function check(selector){
							var radios = document.querySelector(selector);
							console.log(radios);
							for (var i = 0; i < radios.length; i++) {
								console.log(radios[i].checked);
								if (radios[i].checked)
									return true;
							}
							return false;
						}
						function inputInvalid(form_control, isTrue){
							form_group = form_control.closest(".form-group");
							if(isTrue){
								form_group.classList.add('hasError');
								form_group.querySelector(".invalid-feedback").classList.add('is-invalid');
								form_control.classList.add('is-invalid');
								form_group.scrollIntoView({block: "center"});

							}else{
								form_group.classList.remove('hasError');
								form_group.querySelector(".invalid-feedback").classList.remove('is-invalid');
								form_control.classList.remove('is-invalid');
							}
						}
						var form_ctrls = document.querySelectorAll('.form-ctrl');
						var submiter = document.querySelector('#submiter');
						var pre_requis = document.querySelector('input[name="preconditions"]');
						var first_time = document.querySelectorAll('input[name="first_time"]');
						var study_level = document.querySelectorAll('input[name="study_level"]');
						var reason = document.querySelectorAll('input[name="reason"]');

						for(var i = 0; i < form_ctrls.length; i++){
							form_ctrl =  form_ctrls[i];
							form_ctrl.addEventListener('focusout', function(e){
								if(this.value.trim() == ""){
									inputInvalid(this, true)
								}
							});
							form_ctrl.addEventListener('keyup', function(e){
								inputInvalid(this, false)
							});
						}
						pre_requis.addEventListener('change', function(e){
							if(this.checked)
								inputInvalid(this, false)
						});
						first_time.forEach((input) => {
							input.addEventListener('change', function(e){
								if(this.checked);
									inputInvalid(this, false);
							});
						});
						study_level.forEach((input) => {
							input.addEventListener('change', function(e){
								if(this.checked);
									inputInvalid(this, false);
							});
						});
						reason.forEach((input) => {
							input.addEventListener('change', function(e){
								if(this.checked);
									inputInvalid(this, false);
							});
						});
						submiter.addEventListener('click', function(e){
							if(!pre_requis.checked){
								inputInvalid(pre_requis, true);
								return false;
							}
							if(document.querySelector('input[name="first_time"]:checked') == null){
								inputInvalid(first_time[0], true);
								return false;
							}
							for(var i = 0; i < form_ctrls.length; i++){
								form_ctrl =  form_ctrls[i];
								if(form_ctrl.value.trim() == ""){
									inputInvalid(form_ctrl, true);
									return false;
								}
							}
							if(document.querySelector('input[name="study_level"]:checked') == null){
								inputInvalid(study_level[0], true);
								return false;
							}
							if(document.querySelector('input[name="reason"]:checked') == null){
								inputInvalid(reason[0], true);
								return false;
							}
							document.getElementById('coffee_inscription').submit();
						});
					</script>
				</div>
			<?php else:?>
				<div style="display: flex;flex-direction: column;align-items: center">
					<div class=" form-group w-75" style="border-top: 7px solid #0fbe7c; text-align: center">
						<h1>Aucun évènement</h1>
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
