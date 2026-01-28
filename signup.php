<?php
include "db.php";

$username = $_POST['username' ];
$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];
$phone = $_POST[ 'phone' ];
$query = "INSERT INTO users (username, email, password, phone)
          VALUES ('$username', '$email', '$password', '$phone')";

if (mysqli_query($conn, $query)) {
    echo "Registration Successful";
} else {
    echo "Error occurred";
}
?>