<?php
if (isset($_POST['submit']))
{
$name=$_POST['seller_name'];
$address=$_POST['address'];
$email=$_POST['email'];
echo $name."<br>";
echo $email."<br>";
echo $address."<br>";
echo "<h1>STRING FUNCTIONS</h1>";
echo "length of ".$name." ".strlen($name)."<br>";
echo "Word count of Address ".$address." ".str_word_count($address)."<br>";
echo "reverse of email is".strrev($email)."<br>";
echo "Name to Upper case: ".strtoupper($name)."<br>";
echo "Name to Lowe case: ".strtolower($name)."<br>".$name;
echo "Address to First letter Capitalized: ".ucfirst($address)."<br>";
echo "Address to First letter of every word is  Capitalized: ".ucwords($address)."<br>";
echo "Address to Upper case: ".strpos($address,"i")."<br>";
echo "Name replace e with i: ".str_replace("e","i",$name)."<br>";
echo "Address substring from 2 to 8 index   ".substr($address,3,6)."<br>";
echo "   Hello World   "."Trim ".trim("...Hello World...",".")."<br>";
echo "   Hello World"."lTrim ".ltrim("...Hello World",".")."<br>";
echo "Hello World    "."rTrim ".rtrim("Hello World...    ",".")."<br>";
echo "Comparing email and name ",strcmp($email,$name)."<br>";
echo "Comparing email and email  ",strcmp($email,$email)."<br>";
echo "Comparind renuka and Renuka without casesensitive",strcasecmp("renuka","Renuka")."<br>";
echo "Special Characters ".htmlspecialchars("<script>alert('Renuka')</script>")."<br>";
echo "Add Slashes".addslashes("O'really");
}



?>
<html>
    <head>
        <form action="string_functions.php" method="POST">
            <legend><h3>Seller Details</h3></legend>
<label for="seller_name"> Name : </label>
<input type="text" placeholder="Seller Name" name="seller_name" maxlength="20" required><br><br>
<label for="address"> Address </label>
<input type="text" placeholder="address" name="address"  required><br><br>
<label for="email"> Email : </label>
<input type="email" name="email" placeholder="renuka@gmail.com"><br><br>
<input type="submit" name="submit">
</form>
</head>
</html>