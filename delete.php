<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * FROM 	symbols ORDER BY email";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["name"].'</td>  
<td>'.$row["title"].'</td>  
<td>'.$row["email"].'</td>  
<td>'.$row["year"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["fromdate"].'</td>  
<td>'.$row["todate"].'</td> 
<td>'.$row["people"].'</td> 
</tr>  
';
    }
    return $output;
}
 ?>
<?php include('header.php'); ?>
<center>
<h3 style="padding: 30px;">Delete Registration entry:</h3>

<form action ="dodelete.php" method="post" style="padding-bottom: 40px;">
 <div class="input-group col-6">
      <input type="int" name="id" class="form-control" placeholder="Enter id of the entry to be deleted" required>
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit" value="submit">Delete!</button>
      </span>
    </div>
  </div>
  </form>
<h3 style="padding: 20px;">Records In Database:</h3>
  <div class="table-responsive table-hover table-bordered col-10" >

     <table class="table" >
  <thead > 
    <tr class="table-primary">
                <th width="1%">Id</th>
           		
                <th width="1%">Name</th>
                <th width="1%">Event</th>
                <th width="1%">Email</th>
                <th width="1%">Year</th>
                <th width="1%">Gender</th>
                <th width="1%">From date</th>
                <th width="1%">To date</th>
                <th width="1%">No of people</th>
            </tr>


		<tbody>
            <?php
            echo fetch_data();
            ?>
        </tbody>
		</table>
        </thead>
        </table>
    </div>
    </div>
</center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM symbols";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
       // output data of each row
      
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<?php include('footer.php'); ?>