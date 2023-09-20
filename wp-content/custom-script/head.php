<?php
require $_SERVER['DOCUMENT_ROOT'].'/wp-config.php';
require $_SERVER['DOCUMENT_ROOT'].'/wp-content/custom-script/DB.php';
function securiser($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}