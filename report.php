<?php include('createpdf.php') ?>

<?php include('header.php'); ?>

 <div class="container">
<center>

<h3 style="padding: 15px;">Registration Report</h3>

    <div class="table-responsive table-hover table-bordered col-12 " >

     <table class="table " >
  <thead > 
    <tr class="table-primary">
           
                <th width="6%">Name</th>
                <th width="4%">Event</th>
                <th width="2%">Email</th>
                <th width="1%">Year</th>
                <th width="1%">Gender</th>
                <th width="4%">From date</th>
                <th width="4%">To date</th>
                <th width="4%">No of people</th>
            </tr>


		<tbody>
            <?php
            echo fetch_data();
            ?>
        </tbody>
		</table>
        <div class="col-md-12 " align="right">
            <form method="post"><center>
                <input type="submit" class="btn btn-primary" name="generate_pdf" value=" Generate PDF" />
            </center>
            </form>
        </div>
        </thead>
        </table>
    </div>
    </div>
</center>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>