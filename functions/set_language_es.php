<?php
session_start();
$_SESSION['lang'] = "es";
header("Location: /index.php");
die();