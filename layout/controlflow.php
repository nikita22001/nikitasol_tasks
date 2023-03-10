<?php $title = "Exercise 4";
include "header.php"
 ?>

<h3>Control flow and loops</h3>

<h4>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not.</h4>
<?php
    $month = date('F');
    if($month == 'August'){
        echo "It is August, so its still hoilday";
    }
    else{
        echo "Not August, so at least not in the peak of the heat";
    }
?>

<h4>2. Assign colour red to a variable name $color and check to print one the following responses.</h4>
<?php
    $color = 'Red';
    if($color == 'Red'){
        echo "The color is Red.";
    }
    else{
        echo "The color is not Red.";
    }
?>


<h4>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h4>
<?php
    $score = 100;
    if ($score > 80)
    {
        echo "Excellent";
    }
    elseif ($score > 70)
    {
        echo "Great";
    }
    elseif ($score > 50)
    {
        echo "Pass";
    }
    elseif($score < 50){
        echo "Fail";
    }

?>

<h4>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.</h4>
<?php
    function check_vote(){
    $name = "Nikita";
    $age = 14;

    if($age >= 18){
        echo $name . " You are eligible for vote.";
    }
    else{
        echo $name . "You are not eligible for vote.";
    }
    }
check_vote();
?>


<h4>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name.</h4>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

switch (true){
    case strpos($user_agent, 'Edge'):
        echo "You are using Microsoft Edge";
        break;
    case strpos($user_agent, 'Chrome'):
            echo "You are using Google Chrome";
            break;
    case strpos($user_agent, 'Firefox'):
        echo "You are using Mozilla Firefox";
        break;
  
    default:
        echo "Your browser could not be determined";
}
?>


<? include "footer.php"?>