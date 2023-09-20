<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
$database = new DB();
$attendees = $database->select("SELECT DISTINCT attendees_first_time, attendees_name, attendees_email, attendees_phone, attendees_profil, attendees_study_level, attendees_washere, attendees_hasconfirmed, attendees_ID FROM wp_attendees WHERE coffee_id = ?",[$_GET['coffee']]);
$attendees = $attendees->fetchAll();
$coffee_title = $database->select("SELECT coffee_title FROM wp_coffees WHERE coffee_id = ?",[$_GET['coffee']]);
$coffee_title = $coffee_title->fetch()['coffee_title'];
$study_level = [
    'l'  => 'Licence',
    'm1' => 'Master 1',
    'm2' => 'Master 2'
];
$first_time = [
    'yes' => 'Oui',
    'no'  => 'Non'
];