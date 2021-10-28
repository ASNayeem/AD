<?php
 
 $db_email = "root";
 $db_pass = "";
 $db_name = "useraccounts";

 $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_email, $db_pass);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>