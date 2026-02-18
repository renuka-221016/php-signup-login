<?php
require_once 'config.php';

$login_url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Google Login</title>
</head>
<body>

<h2>Login with Google</h2>

<a href="<?php echo $login_url; ?>">
    <button>Login with Google</button>
</a>

</body>
</html>