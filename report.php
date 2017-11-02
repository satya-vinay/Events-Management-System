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
<?php include('footer.php'); ?>