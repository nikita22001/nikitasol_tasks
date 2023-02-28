
<?php
$title = "JavaScript Event and Form Validations";
 include "header.php" ?>

<h2>A simple bottom to display date</h2>
<button onclick="this.innerHTML=Date()">Click to know Date</button>

<hr>

<h2>Make a bottom and a place holder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click to know Date</button>
<p id="p1"></p>

<hr>

<h2>Change the background color</h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>

<hr>
<h2>Change the font color</h2>
<form>
    <input type="color" id="fcolor" onchange="changeFcolor()">
</form>

<hr>

<h2>On mouse over</h2>
<span onmouseover="this.style.color='blue';
                    this.style.backgroundColor='yellow'
                    this.style.fontSize='2em'; "
      onmouseout="this.style.color='red';
                  this.style.backgroundColor='white';
                  this.style.fontSize='1em';"              
                    >Some text
</span>

<hr>

<?php include "footer.php" ?>