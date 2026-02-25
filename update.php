
<?php
require "config/db.php";
$email = $_GET['email'];
$user = $usersCollection->findOne([
    "email"=>$email
]);
?>
<form method="POST">
Name:
<input type="text" name="name"
value="<?php echo $user['name']; ?>"><br>

Email:
<input type="text" name="email"
value="<?php echo $user['email']; ?>"><br>

Password:
<input type="text" name="password"
value="<?php echo $user['password']; ?>"><br>

<button name="update">Update</button>

</form>

<?php

if(isset($_POST['update'])){

$newName = $_POST['name'];
$newEmail = $_POST['email'];
$newPassword = $_POST['password'];

$usersCollection->updateOne(
["email"=>$email],
['$set'=>[
"name"=>$newName,
"email"=>$newEmail,
"password"=>$newPassword
]]
);

echo "Updated Successfully";
}

?>






