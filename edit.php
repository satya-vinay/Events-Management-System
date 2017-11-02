<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * FROM   symbols ORDER BY email";
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
<h3 style="padding: 20px;">Edit Registration:</h3>

<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='doedit.php' method='post'>
<div class="form-group row">
    <label for="name" class="col-4">ID:</label>
    <input type="int" class="form-control col-7" id="id" name="id" placeholder="Enter id to be edit" required>
 
  </div>
  <div class="form-group row">
    <label for="name" class="col-4">Name:</label>
    <input type="text" class="form-control col-7" id="name" name="name" placeholder="Enter name" required>
 
  </div>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-4">Email address:</label>
    <input type="email" class="form-control col-7" id="email" name="email" placeholder="Enter email" required>
 
  </div>
  <div class="form-group row">
    <label for="title" class="col-4">Event:</label>
    <input type="text" class="form-control col-7" id="title" name="title" placeholder="Enter event" required>
   
  </div>
<div class="form-group row">
    <label for="Year" class="col-4">Year:</label>
    <input type="int" class="form-control col-7" id="Year" name="Year" placeholder="Enter Year" required>
   
  </div>
  <div class="form-group row">
    <label for="title" class="col-4">Gender:</label>
     <label class="col-4">male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div>

    <div class="form-group row">
    <label for="title" class="col-4">From Date:</label>
    <input type="date" class="form-control col-7" id="fromdate" name='fromdate'  required>
   
  </div>
  <div class="form-group row">
    <label for="title" class="col-4">To Date:</label>
    <input type="date" class="form-control col-7" id="todate" name='todate'  required>
   
  </div>
  <div class="form-group row">
    <label for="Year" class="col-4">No. of People:</label>
    <input type="int" class="form-control col-7" id="people"  name='people' placeholder="Enter number of people" required>
   
  </div>
 
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  <button class="btn btn-warning" type="reset"  value='Reset' >Reset</button>
</form>
</div>
</div>

</center>

<?php include('footer.php'); ?>

