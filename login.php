<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$username=strtolower($username);
if (strlen($username)==0){
    die("username required");
}
else{
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    header("Location:index.html");
} else {
    print "$username is invalid";
}
}
?>