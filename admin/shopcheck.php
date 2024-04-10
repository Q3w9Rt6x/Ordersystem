<?php

$email = isset($_POST['email'])? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8') : '';
$password = isset($_POST['password'])? htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8'): '';

if ($email == '') {
    header("Location:./index.html");
    exit;
}
if ($password == '') {
    header("Location:./index.html");
    exit;
}

if ($email=='login@check.com'&&$password=='password') {
    session_start();
    $_SESSION['admin_login'] = true;
    header("Location:./misekakunin.php");
} else {
    header("Location:./index.html");
    exit;
}