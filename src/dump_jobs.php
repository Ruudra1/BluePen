<?php include 'navbar1.php'; ?>

    <div class="site-section  overlay" id="contact-section">
      <div class="container">
      
                 <br><br>
                  <h1>Dump Jobs</h1>
                  
                  <br><br>
                  <div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Submission date</th>
				<th>Delivery date</th>
				<th>Amount</th>
				<th>Category</th>
			</tr>
			<?php 	
			$result= mysqli_query($conn, "SELECT * FROM dump_jobs");

			while ($row = mysqli_fetch_array($result)){
				echo '<tr>
                        <td>'.$row["user_id"].'</td>';
                    $sql2='select * from users where id='.$row["user_id"].'';
                    $result2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_array($result2);

                   echo '<td>'.$row2["firstname"].' '.$row2["lastname"].'</td>
                        <td>'.$row2["email"].'</td>
                        <td>'.$row2["mobile"].'</td>
                        <td>'.$row["submission_date"].'</td>
						            <td>'.$row["delivery_date"].'</td>
                        <td>'.$row["amount"].'</td>
                        <td>'.$row["category"].'</td>
                        </tr>';
					//<button class=\"btn btn-danger\" action=\"test.php\">BLOCK</button>
      }	
      ?>
      	
	</table>
               
          </div>
        
        </div>
        
      </div>
    </div>

    <!--contact end-->

    <!--footer-->
    <?php
include "footer.php";
?>