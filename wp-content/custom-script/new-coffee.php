<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
$database = new DB();
if(isset($_POST['submit'])){
	$coffee_title 	= securiser($_POST['coffee_title']);
	$coffee_date 	= securiser($_POST['coffee_date']);
	$database->insert(
		"INSERT INTO `wp_coffees` (`coffee_title`, `coffee_date`, `coffee_status`) VALUES (?, ?, 'soo')",
		[
			$coffee_title,
			$coffee_date
		]
	);
	$database->insert(
		"UPDATE `wp_coffees` SET `coffee_status` = 'finished' WHERE `wp_coffees`.`coffee_status` = 'soon';
		 UPDATE `wp_coffees` SET `coffee_status` = 'soon' WHERE `wp_coffees`.`coffee_status` = 'soo';
		"
	);
	$saved = "/index.php/la-liste-des-cafes/";
}
?>