<?php

$db_user = "cornelieanne";
$db_pass = "Korni2004";
$db_name = "cornelieanne";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);