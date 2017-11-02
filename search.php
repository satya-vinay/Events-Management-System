<?php include('header.php'); ?>

<center>
<h2 style="padding: 20px;">Search Registration:</h3>
 <div class="container">
   <br />
   
   <div class="col-lg-12">
    <div class="input-group">
      <input type="text" class="form-control" name='search_text' id='search_text' placeholder="Enter a Event to Search. . . . . . ." aria-label="Enter a event to search">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>
   <br />
   <div id="result"></div>
  </div>
  </center>
 

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</body>
</html>