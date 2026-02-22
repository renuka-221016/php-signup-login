<?php
require_once "config.php";

$login_url = $client->createAuthUrl();
?>

<html>
<body>

<h2>OAuth Login</h2>

<a href="<?php echo $login_url; ?>">
<button>Login with Google</button>
</a>

<br><br>

<a href="github_login.php">
<button>Login with GitHub</button>
</a>

<br><br>

<a href="firebase_login.html">
<button>Login with Firebase</button>
</a>

</body>
</html>