
<?php
include("dbconnect.php");
$id=$_REQUEST["id"];
$query=mysqli_query($db_connect, "delete from symbols  where id = '$id' ");
mysqli_close($db_connect);
if($query) {

    echo "<script type='text/javascript'>alert('Succesfully Deleted! ');

  window.location = 'delete.php';


</script>";
}
?>