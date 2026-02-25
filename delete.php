<?php

require "config/db.php";

$email = $_GET['email'];

$usersCollection->deleteOne([
"email"=>$email
]);

echo "User Deleted";

header("Location: display.php");

?>