<?php $title = "Delete Data";
include "../layout/header.php";
include 'db.php';

$a=$_GET['id'];
$result = mysqli_query($conn,"select * from studentinfo where id='$a' ");
$row=mysqli_fetch_array($result);
?>












<?php
    if(isset($_POST['Delete'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];

        $query = mysqli_query($conn,"delete from studentinfo where id='$a' ");
        if($query){
            echo "<h2> Your information is delete sucessfully. </h2>";
        }else
        {
            echo "Record not deleted.";
        }
    }
?>
<?php include "../layout/footer.php";
?>
