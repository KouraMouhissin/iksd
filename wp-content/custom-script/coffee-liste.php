<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/head.php';
$database = new DB();
$coffees = $database->select('SELECT *, DATE_FORMAT(coffee_date, "Le %d/%m/%Y") as c_date FROM wp_coffees ORDER BY coffee_date DESC');
$coffees = $coffees->fetchAll();

function presentList($id){
    $database = new DB();
    $coffees = $database->select("SELECT count(attendees_ID) as presents FROM wp_attendees WHERE coffee_id = ? AND attendees_washere = '1'", [$id]);
    return $coffees->rowCount() == 1 ? (int) $coffees->fetch()['presents'] : 0;
}