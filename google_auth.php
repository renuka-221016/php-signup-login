<?php
require_once 'config.php';

if(isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $_SESSION['access_token'] = $token;

    $google_service = new Google_Service_Oauth2($client);
    $data = $google_service->userinfo->get();

    $_SESSION['user_email'] = $data['email'];
    $_SESSION['user_name'] = $data['name'];
    $_SESSION['user_picture'] = $data['picture'];
}

if(!isset($_SESSION['access_token'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['user_name']; ?></h2>
<img src="<?php echo $_SESSION['user_picture']; ?>" width="100">
<p>Email: <?php echo $_SESSION['user_email']; ?></p>

<a href="logout.php">Logout</a>