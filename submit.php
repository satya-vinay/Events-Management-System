<?php
include("dbconnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$title=$_REQUEST['title'];
$year=$_REQUEST['Year'];
$gender=$_REQUEST['gender'];
$fromdate=$_REQUEST['fromdate'];
$todate=$_REQUEST['todate'];
$people=$_REQUEST['people'];


$query=mysqli_query($db_connect,"INSERT INTO symbols(name,email,title,year,gender,fromdate,todate,people) VALUES('$name','$email','$title','$year','$gender','$fromdate','$todate','$people')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'index.php';

</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'index.php';

</script>";

    }


mysqli_close($db_connect);


?>
