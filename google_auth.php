<?php
require_once "config.php";

if (!isset($_GET['code'])) {
    die("Authorization code not received");
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if(isset($token['error'])){
    die("Token Error");
}

$client->setAccessToken($token);

$oauth = new Google_Service_Oauth2($client);
$user = $oauth->userinfo->get();

echo "<h2>Google Login Success</h2>";
echo "Name: ".$user->name."<br>";
echo "Email: ".$user->email;

echo "<br><a href='logout.php'>Logout</a>";
?>