<?php $title = "Update Data";
include "../layout/header.php";
include 'db.php';

$a=$_GET['id'];
$result = mysqli_query($conn,"select * from studentinfo where id='$a' ");
$row=mysqli_fetch_array($result);
?>

<h2>Update Your Information Below</h2>
<form method="post" action="" name="update">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname'];?> "><br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>  "><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?> "><br><br>
    <select name="groupid" value="<?php echo $row['groupid'];?>" >
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select><br><br>


    <input type="submit" value="Update your Info" name="Update"> <br><br>
    <input type="submit" value="Delete your Info" name="Delete"> <br><br>
</form>


<?php
    if(isset($_POST['Update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];

        $query = mysqli_query($conn,"update studentinfo set fname='$fname', lname='$lname', city='$city', groupid='$groupid' where id='$a' ");
        if($query){
            echo "<h2> Your information is updated sucessfully. </h2>";
        }else
        {
            echo "Record not modified";
        }
    }
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
