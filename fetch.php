<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM symbols 
  WHERE title LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM symbols ORDER BY id
 ";
}

 $result=$connect->query($query);
if($result->num_rows > 0)
{
 $output .= '
  <div class="table-responsive table col-12">
   <table class="table table bordered table-hover">
   <thead>
    <tr class="table-primary">
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Title</th>
     <th>Year</th>
     <th>Gender</th>
     <th>From date</th>
     <th>To Date</th>
     <th>People</th>
    </tr>
    </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["year"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["fromdate"].'</td>
    <td>'.$row["todate"].'</td>
    <td>'.$row["people"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<h3 style="padding:30px;">Data Not Found</h3>';
}

?>