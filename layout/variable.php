<?php $title = "Exercise 3";
include "header.php"
 ?>

<h3> Exercise 3. In-class task variable & operators(variable.php)</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print.</h2>

<form action="action.php" method="post" >
<div class="row">
    <div class="col" >
        <input type="text" placeholder="First Name" name="fname" required class="form-control"> 
    </div>
    <div class="col">
        <input type="text" placeholder="Last Name" name="lname" required class="form-control"> 
    </div>
</div>

<div class="row">
    <div class="col">
        Birth Date: <input type="date" name="bdate" class="form-control"> 
    </div>
</div>
<div class="row">
    <div class="col">
        Select fav Color: <input type="color" name="color" class="form-control">
    </div>
</div>

<div class="row">
    <button type="button" value="Submit" class="btn btn-primary">Submit</button>
</div>


</div>
</form>

<h3>Prepare a simple html table and apply bootstrap style to the table.</h3>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Sr No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         <th scope="row">1</th>
         <td>Nikita</td>
         <td>Solanki</td>
        </tr>
        <tr>
         <th scope="row">2</th>
         <td>Kush</td>
         <td>Rathod</td>
        </tr>
        <tr>
         <th scope="row">3</th>
         <td>Mihaan</td>
         <td>Rathod</td>
        </tr>
    </tbody>
</table>

<h3>Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string</h3>

<?php
 
$fname = 'Nikita';
$lname = 'Solanki';
 
$c = $fname." ".$lname;
echo " $c \n";
echo "\n String length is" . strlen($c);

?>


<h3>Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>

<?php
$a = 298;
$b = 234;
$c = 46;

$d = $a + $b + $c;
echo "\n Sum is: " . $d;
?>

<h3>Write a PHP script to detect the browser being used to view your pages</h3>

<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

?>

<h3>Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h3>

<? include "footer.php"?>