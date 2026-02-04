<?php
include "db.php";

$username = $_POST['username' ];
$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];
$phone = $_POST[ 'phone' ];
$username=strtolower($username);
$username=trim($username);
$len=strlen($username);
if($len>2){
$query = "INSERT INTO users (username, email, password, phone)
          VALUES ('$username', '$email', '$password', '$phone')";

if (mysqli_query($conn, $query)) {
    echo "Registration Successful";
} else {
    echo "Error occurred";
}
}
else{
    echo"username atleast 3 chars"."<br>";
    
}
?>