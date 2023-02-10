<?php $title = "Exercise 5";
include "header.php";
 ?>

<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required > <br><br>
    <input type="number" placeholder="Enter your second number" name="num2" required > <br><br>

    <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multipication</option>
        <option value="div">Division</option>
    </select>
    <br><br>

    <input type="submit" name="cal" value="Calculate">

    <?php
    if (isset($_GET["cal"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];

        switch($operator){
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "mul":
                $result = $num1 * $num2;
                break;
            case "div":
                $result = $num1 / $num2;
                break;
            default:
                $result = "Error: You have not select the correct operator";
        }
    }

    if (isset($result)){
        echo "<h3> Result: $result </h2>";
    }
    ?>
</form>

<hr>
<h4> 1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h4>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

foreach ($courses as $c)
{
    echo "<li> $c </li>";
}
?>

<h4>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
</h4>

<?php
    $courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    unset($courses[2]);
    $courses = array_values($courses);
    var_dump($courses);
    
?>

<h4>3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h4>

<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "a) ascending order sort by value <br>";
asort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "b) ascending order sort by Key<br>";
ksort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "c) descending order sort by Value<br>";
arsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }


echo "d) descending order sort by Key<br>";
krsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }
?>



<h4>4. Change the following array's all values to upper case.
</h4>

<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>

<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>


<h4>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h4>

<?php
$color['ff0000'] = "Red";
$color['ffc0cb'] = "Pink";
$color['0000ff'] = "Blue";
$color['80080'] = "Purple";
$color['008000'] = "Green";

foreach($color as $x=>$x_value){
    echo $x . "=>" . $x_value . "<br>";
}
?>

<h4>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h4>
<?php
$a = array(
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
);
$sum=array_sum($a);
$count = count($a);
echo "Average temperature:" . $sum / $count;
sort($a);
for($i=0; $i<5; $i++){
    echo $a[$i] . "<br>";
}
rsort($a);
for($i=0;$i<5;$i++){
    echo $a[$i] . "<br>";
}

?>
<? include "footer.php"?>