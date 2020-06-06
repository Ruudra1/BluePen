<?php include 'navbar1.php'; ?>

    <div class="site-section  overlay" id="contact-section">
      <div class="container">
      
                 <br><br>
                  <h1>Dump_Writer</h1>
                  
                  <br><br>
                  <div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tr>
                <th>ID</th>
                <th>Name</th>
				<th>Mobile no.</th>
				<th>Email</th>
				<th>Address</th>
				<th>Category</th>
			</tr>
			<?php 	
			$result= mysqli_query($conn, "SELECT * FROM dump_writer");

			while ($row = mysqli_fetch_array($result)){
				echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["name"].'</td>
						<td>'.$row["mobile"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["address"].'</td>
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