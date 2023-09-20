<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
$database = new DB();
$attendees = $database->select("SELECT `attendees_washere` FROM `wp_attendees` WHERE `attendees_ID` = ?", [$_POST['attendee']]);
$washere = (int)$attendees->fetch()['attendees_washere'];
$washere = $washere == 0 ? 1 : 0;
$attendees = $database->insert("UPDATE `wp_attendees` SET `attendees_washere` = ? WHERE `attendees_ID` = ?", [$washere, $_POST['attendee']]);
echo json_encode(['error' => "false"]);
header("Content-type: json/application");