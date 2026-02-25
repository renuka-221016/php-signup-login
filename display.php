i<?php
require "config/db.php";

$users = $usersCollection->find();
?>

<table border="1">

<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Update</th>
<th>Delete</th>
</tr>

<?php foreach($users as $user){ ?>

<tr>
<td><?php echo $user['name']; ?></td>
<td><?php echo $user['email']; ?></td>
<td><?php echo $user['password']; ?></td>

<td>
<a href="update.php?email=<?php echo $user['email']; ?>">
<button>Update</button>
</a>
</td>

<td>
<a href="delete.php?email=<?php echo $user['email']; ?>">
<button>Delete</button>
</a>
</td>

</tr>

<?php } ?>

</table>
