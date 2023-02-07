<?php include "header.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];

echo "<h3> Your name is $fname $lname </h3>";
echo "<h3> Your birth date is $bdate </h3>";
echo "<h3> Your favorite color is $color </h3>";

?>

<? include "footer.php"?>