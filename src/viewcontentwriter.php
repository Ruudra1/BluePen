<?php include 'navbar1.php'; ?>
  
    <div class="site-section  overlay" id="contact-section">
      <div class="container">
      
                 <br><br>
                  <h1>Content Writer</h1>
                  
                  <br><br>
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered">
			<tr>
                <th>ID</th>
                <th>First Name</th>
				<th>Last name</th>
				<th>Mobile no.</th>
				<th>Email</th>
				<th>Address</th>
                <th>Genere</th>
                <th>Language 1</th>
                <th>Language 2</th>
				<th>Sample</th>
        <th>Action</th>

			</tr>
			<?php 	
			$result= mysqli_query($conn, "SELECT * FROM contentwriter ORDER BY `assign_id` ASC");

			while ($row = mysqli_fetch_array($result)){
				echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["firstname"].'</td>
						<td>'.$row["lastname"].'</td>
						<td>'.$row["mobile"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["address"].'</td>
                        <td>'.$row["genere"].'</td>
                        <td>'.$row["lang1"].'</td>
                        <td>'.$row["lang2"].'</td>
						<td>'.$row["samples"].'</td>
            <td><a href="" data-toggle="modal" data-target="#deletemodal'.$row['id'].'" >Delete</a></td>
          </tr>
          <div class="modal fade" id="deletemodal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure ? you want to delete the Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <a href="includes/delete.inc.php?id='.$row['id'].'&u=cw"><button type="button" class="btn btn-primary">Yes</button></a>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            
            </div>
          </div>
        </div>';
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

    <div class="footer py-5 text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  
  </body>
</html>