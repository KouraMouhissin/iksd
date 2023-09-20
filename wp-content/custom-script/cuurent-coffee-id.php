<?php
	require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
	$database = new DB();
	$query = $database->select(
		"SELECT * FROM `wp_coffees` WHERE coffee_status = 'soon'"
	);
	$query = $query->fetch();
	$toDay = date('Y-m-d H:i:s');
	$coffee_date = $query['coffee_date'];
	if($toDay < $coffee_date)
		$coffee_id = (int) $query['coffee_id'];
?>