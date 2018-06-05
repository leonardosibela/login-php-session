<?php

session_start();

$user = $_POST["user"];
$password = $_POST["password"];

if ($user != "etec" || $password != "admin") {
    header("Location: index.php?loginerror=true");
    die();
} else {
    $_SESSION['loged_user'] = $user; 
    header("Location: home.php");
    die();
}

?>