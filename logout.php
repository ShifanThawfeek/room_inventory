<?php session_start(); ?>

<?php
$_SESSION['id'] = null;
$_SESSION['name'] = null;
$_SESSION['username'] = null;
$_SESSION['email'] = null;
$_SESSION['password'] = null;

header("Location: http://localhost/room_inventory/login.php");

?>