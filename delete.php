<?php
 require_once"db.php";
 $db = new DB();
 $db->delete($_POST['id']);
?>