<?php include('header.php'); ?>

<center>
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

   
</center>
<script>
        function myfunction(){
            alert("Data Updated And Submitted Succesfully");
        }
    </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>