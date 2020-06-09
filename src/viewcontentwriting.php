 <?php include 'navbar1.php'; ?>


    <div class="site-section  overlay" id="contact-section">
      <div class="container">
      
                 <br><br>
                  <h1>Content writing</h1>
                  
                  <br><br>
                  <div class="table-responsive">
				  <table class="table table-striped table-bordered">
			<tr>
                <th>User ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>College</th>
                <th>Content ID</th>
				<th>Content title</th>
				<th>Content Desc.</th>
				<th>Date and Time of Upload</th>
				<th>Delivery Date</th>
				<th>Amount</th>
				<th>SOA Assigned</th>
				<th>SOA Paid</th>
				<th>SOA Written</th>
				<th>SOA Completed</th>
        <th>Action</th>
			</tr>
			 <?php 	
			 
			$result= mysqli_query($conn, "SELECT * FROM contentwriting");

			while ($row = mysqli_fetch_array($result)){
				$result1= mysqli_query($conn, 'SELECT * FROM users where id='.$row["user_id"]);
				$row1 = mysqli_fetch_array($result1);
				 echo '<tr>
						 <td>'.$row["user_id"].'</td>
						 <td>'.$row1["firstname"].' '.$row1["lastname"].'</td>
						 <td>'.$row1["email"].'</td>
						 <td>'.$row1["college"].'</td>
						 <td>'.$row["content_id"].'</td>
						 <td>'.$row["content_title"].'</td>
						 <td>'.$row["content_desc"].'</td>
						 <td>'.$row["submission_datetime"].'</td>
						 <td>'.$row["delivery_date"].'</td>
						 <td>'.$row["amount"].'</td>
						 ';

						$check_assigned = mysqli_query($conn, "SELECT soa_assigned,soa_paid,soa_written,soa_completed FROM contentwriting WHERE content_id=".$row['content_id']."");
						// $check_written = ;
						// $check_paid = ;
						// $check_completed = ;


						// $check_paid = mysqli_query($conn, "SELECT Paid,attended FROM registration WHERE regno=".$row['regno']."");
						$check = mysqli_fetch_array($check_assigned);
						// var_dump($check);
						if($check['soa_assigned']==0)
						{
              echo '<td><a class="top" href="includes/assigned.inc.php?id='.$row['content_id'].'&u=c">Not Assigned</a></td>
              <td>Not Paid</td>
              <td>Not Written</td>
              <td>Not Completed</td>
              <td><a href="" class="top"  data-toggle="modal" data-target="#deletemodal'.$row['content_id'].'" >Delete</a></td>';
						}	
						else
						{
							echo '
							<td>Done</td>';
							if($check['soa_paid']==0)
							{
                echo'<td><a class="top" href="includes/paid.inc.php?id='.$row['content_id'].'&u=c">Not Paid</a>
                <td>Not Written</td>
              <td>Not Completed</td>
              <td><a href="" class="top"  data-toggle="modal" data-target="#deletemodal'.$row['content_id'].'" >Delete</a></td>';
							}
							else
							{
								echo '
								<td>Done</td>';
								if($check['soa_written']==0)
								{
                  echo '<td><a class="top" href="includes/written.inc.php?id='.$row['content_id'].'&u=c">Not Written</a>
                  <td>Not Completed</td>
              <td><a href="" class="top"  data-toggle="modal" data-target="#deletemodal'.$row['content_id'].'" >Delete</a></td>';
								}
								else
								{
									echo '
									<td>Done</td>';
									if($check['soa_completed']==0)
									{
                    echo '<td><a class="top" href="includes/complete.inc.php?id='.$row['content_id'].'&u=c">Not Completed</a></td>
                    <td><a href="" data-toggle="modal" data-target="#deletemodal'.$row['content_id'].'" class="top">Delete</a></td>';
									}
									else
									{
										echo '
                    <td>Completed</td>
                    <td><a href="" data-toggle="modal" data-target="#deletemodal'.$row['content_id'].'" class="top">Delete</a></td>';
									}
								}
							}
						}
 
           echo'</tr>
           <div class="modal fade" id="deletemodal'.$row['content_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Are you sure ? you want to delete the Job</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
               <a href="includes/delete.inc.php?id='.$row['content_id'].'&u=c"><button type="button" class="btn btn-primary">Yes</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
               </div>
             
             </div>
           </div>
         </div>';
					 //<button class=\"btn btn-danger\" action=\"test.php\">BLOCK</button>
			 }
			
            // $event_id=$_GET['id'];
			// $result= mysqli_query($conn, "SELECT * FROM registration where event_id='$event_id'");
			// $_SESSION['Event_id']=$event_id;
			// $c=1;
			// while ($row = mysqli_fetch_array($result)){
				// echo '<tr>
						// <td>'.$c.'</td>
						// <td>'.$row["name"].'</td>
						// <td>'.$row["surname"].'</td>
						// <td>'.$row["class"].'-'.$row["division"].'</td>
						// <td>'.$row["rollno"].'</td>
						// <td>'.$row["mobile_no"].'</td>
						// <td>'.$row["email"].'</td>
						// <td>'.$row["regno"].'</td>
						// ';
						// $check_paid = mysqli_query($conn, "SELECT Paid,attended FROM registration WHERE regno=".$row['regno']."");
						// $check = mysqli_fetch_array($check_paid);
						// if($check['Paid']==0)
						// {
							// echo '
						// <td><a class="top" href="includes/Paid.inc.php?id=' . $row['regno'] . '">Paid</a></td>
						// <td>Attended</td>
						// ';
					
							// $sql = "UPDATE `registration` SET `Paid` = 1 WHERE `regno` =".$row['regno']."";
							//mysqli_query($conn, $sql) or die("We're Facing some issues");
						
						// }	
						// else{
							// echo '
						// <td>Done</td>';
						// if($check['attended']==0){
						// echo'<td><a class="top" href="includes/attended.inc.php?id='.$row['regno'].'">Attended</a></td>';
						// }else{
							// echo'<td>Attended</td>';
							
						// }

						// }
						// echo'</tr>';
						// $c++;
					
			// } 	
			
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