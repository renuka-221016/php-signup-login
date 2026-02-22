<?php
session_start();

$client_id = "Ov23lioLp4VvZD5a4Rwv";

$redirect = "http://localhost/php_cookingwebsite/github_auth.php";

header("Location: https://github.com/login/oauth/authorize?client_id=$client_id&redirect_uri=$redirect&scope=user");
exit();
?>