<?php
session_start();
require_once 'vendor/autoload.php';

$id_token = $_POST['id_token'] ?? '';

$client = new Google_Client();
$client->setClientId("AIzaSyBvIQfWQFNT7ZxJMNGe2aijQTEGHd7LuCo");

try {

    $payload = $client->verifyIdToken($id_token);

    if ($payload) {
        $_SESSION['user_email'] = $payload['email'];
        echo "Login Success";
    } else {
        echo "Invalid Token";
    }

} catch (Exception $e) {
    echo $e->getMessage();
}
?>