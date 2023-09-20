<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/cuurent-coffee-id.php';
if(isset($_POST['preconditions'])){
	$pre_requis 	= securiser($_POST['preconditions']);
	$first_time 	= securiser($_POST['first_time']);
	$name 			= securiser($_POST['name']);
	$email 			= securiser($_POST['email']);
	$phone 			= securiser($_POST['phone']);
	$profil 		= securiser($_POST['profil']);
	$study_level 	= securiser($_POST['study_level']);
	$reason 		= securiser($_POST['reason']);
	
	if(isset($coffee_id)){
		$exits = $database->select("SELECT attendees_email FROM wp_attendees WHERE coffee_id = ? AND attendees_email = ?", [$coffee_id, $email]);
		if($exits->rowCount() == 0){
			$database->insert(
				"INSERT INTO `wp_attendees` (`attendees_pre_requis`, `attendees_first_time`, `attendees_name`, `attendees_email`, `attendees_phone`, `attendees_profil`, `attendees_study_level`, `attendees_reason`, `coffee_id`) 
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
				[
					$pre_requis,
					$first_time,
					$name,
					$email,
					$phone ,
					$profil,
					$study_level,
					$reason,
					$coffee_id
				]
			);
			header('Location: /index.php/inscription-terminee/');
		}else{
			header('Location: /index.php/inscription-terminee/?already-registered=true');
		}
	}else{
		header('Location: /index.php/inscription-terminee/?no-coffee=true');
	}

}else{
	header('Location: /index.php/cafe-technologique/');
}
?>