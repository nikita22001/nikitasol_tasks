<?php
$title = "Exercise 1";
 include "header.php" ?>
    <h1> 3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
    <?php
    echo "Nikita Solanki<br>";
    echo "BBCAP22";
    ?>

    <h1> 3.2 Write PHP code to display the following message.</h1>
        <?php
        echo "Hello World! My name is \"Nikita\"";
        ?>


    <h1>3.3 Write the PHP code in to display the current date.</h1>
    <h3>Current Date</h3>
        <?php echo date("d.m.Y") ?>
<br>
    
    <script>
        document.write("Hello world this is Javascript");
    </script>

    <noscript>
        Please enable Javascript to view this content
    </noscript>
<br>
    <input type="button" onclick="hello()" value="Click Me"><br>
    <h1>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h1>
    <?php 
        $title1 ="PHP is interesting ";
        echo "<h1>".$title1."</h1>";
    ?>


    <script>
        //window.alert
        //window.alert("This will trigger an alert box");
        //window.alert(5+10);
        //document.write
        document.write("Hello this is interesting");
    </script>
<br>
    <button onclick="add()" value="Click to Add">Click to Add</button>
<hr><p id="place1" style="color:red; background-color:yellow;"> </p>
<span id="place2" style="color:red; background-color:green;"> </span>
<script>
    document.getElementById("place1").innerHTML = "This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span";
</script>

    <h1>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h1>
    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;

        echo "<table>
            <tr>
                <th>S.N</th><th>Name</th><th>Grade</th>
            </tr>
            <tr>
                <th>1</th><th>Pekka</th><th> $g1 </th>
            </tr>
            <tr>
                <th>2</th><th>Johanna</th><th> $g2 </th>
            </tr>
            <tr>
                <th>3</th><th>John</th><th> $g3 </th>
            </tr>
        </table>"
    ?>

    <h1> Screen Shoot </h1>

    <img src="Screenshot.png" alt="screenshot"> 

<h2>Changing background color </h2>
<form>
    <input type="color" name="background" onchange="changeColor('background',this.value)">
</form>

<?php include "footer.php" ?>
