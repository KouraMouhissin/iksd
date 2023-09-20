<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
$database = new DB();
$attendees = $database->select("SELECT `attendees_hasconfirmed` FROM `wp_attendees` WHERE `attendees_ID` = ?", [$_POST['attendee']]);
$hasconfirmed = (int) $attendees->fetch()['attendees_hasconfirmed'];
$hasconfirmed = $hasconfirmed == 0 ? 1 : 0;
$attendees = $database->insert("UPDATE `wp_attendees` SET `attendees_hasconfirmed` = ? WHERE `attendees_ID` = ?", [$hasconfirmed, $_POST['attendee']]);
echo json_encode(['error' => "false"]);
header("Content-type: json/application");