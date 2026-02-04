<?php
$no_of_items=20;
$website_name="Cooking-website";
echo "<h3>Items Count by each seller </h3>";
function items_count($a)
{
    global $website_name;//global scope
    echo "Website-name :".$website_name."<br>";
    static $id=0;//static scope
    $id++;
    $count=$a;//Local scope
    echo "No_of_items by seller-".$id." are ".$count."<br>";
}
echo "Total :".$no_of_items."<br>";
items_count(20);
items_count(15);
$seller_name="Ramani";
$seller_age=36;
$item_quantity=10.5;
$seller_license_verified=True;
$seller_items=array("Janthikalu","Kova","Jangree","Boondhi");
echo "<h3>Seller Details:</h3>";
echo "Seller-name:".$seller_name."<br>";
echo "Seller-age:".$seller_age."<br>";
echo "item-quantity:".$item_quantity."<br>";
var_dump($seller_license_verified);
print_r($seller_items);
?>
