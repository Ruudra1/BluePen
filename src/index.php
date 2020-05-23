
<link rel="icon" type="image/png" href="icons/favicon.ico"/>
<?php
include_once "includes/connect.inc.php";
include "navbar.php";
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "error=seccess") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
          Added successfully
        </div>';
} elseif (strpos($url, "error=error") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success" role="alert">
          Could not add please try later
        </div>';
} 
?>
 
     <!--crousal --->
     <br><br><br><br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/1.jpg" alt="First slide">
          <div class="carousel-caption  d-md-block">
            <!-- <h1>Sample Title</h1> -->
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/1.jpg" alt="Second slide">
          <div class="carousel-caption  d-md-block">
            <!-- <h1>Sample Title</h1> -->
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/1.jpg" alt="Third slide">
          <div class="carousel-caption  d-md-block">
            <h1>Sample Title</h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--crousal end-->

  
  <br><br><br>
  <div class="container">
  <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Facts</h2>
            <p class="lead">Did you ever thought of these</p>
          </div>
        </div>
    
		<div class="row text-center">
	        <div class="col">
	        <div class="counter">
      
      <h1 class="timer count-title count-number" data-to="20" data-speed="3500" style="color:#2555a6"></h1>
       <p class="count-text ">Your Age</p>
    </div>
	        </div>
              <div class="col">
               <div class="counter">
     
      <h1 class="timer count-title count-number" data-to="1000" data-speed="3500" style="color:#2555a6"></h1>
      <p class="count-text ">Stress level</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      
      <h1 class="timer count-title count-number" data-to="8750" data-speed="3500" style="color:#2555a6"></h1>
      <p class="count-text ">Hours per year</p>
    </div></div>
              <div class="col">
              <div class="counter">
     
      <h1 class="timer count-title count-number" data-to="200" data-speed="3500" style="color:#2555a6"></h1>
      <p class="count-text ">Hours spent in assignments</p>
    </div>
              </div>
         </div>

</div>
  
    <!--services start-->
    <br><br>
    <div class="site-section" id="features-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Blue Pen Features</h2>
            <p class="lead">6 points to make you realize what you aren't about</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span><i class="fas fa-chart-line"></i></span></span>
              </div>
              <div>
                <h3>Increase Your Productivity</h3>
                <p>Ek saath chaar haath</p>
                
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span><i class="fas fa-diagnoses"></i></span></span>
              </div>
              <div>
                <h3>Decrease your extra efforts</h3>
                <p>Mummy ko help karo</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span><i class="far fa-clock"></i></span></span>
              </div>
              <div>
                <h3>Save your precious time</h3>
                <p>KT ke liye padho</p>
               
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span><i class="fas fa-truck"></i></span></span>
              </div>
              <div>
                <h3>Let your things get delivered at your doorstep</h3>
                <p>Khushiyon ki home delivery</p>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
              </div>
              <div>
                <h3>Register here and let go of all your worries</h3>
                <p class="description"><a href = "signup.php">Sign Up</a> here and then whenever you want the help of Assignman just <a href = "login.php">login</a> and <a href = "uploadassignment.php">submit your assignment</a></p>

               
              </div>
            </div>

            
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span><i class="fas fa-stopwatch"></i></span></span>
              </div>
              <div>
                <h3>Coming Soon</h3>
                <p class="description">We'll take care of your projects soon.</p>
                <br>

                
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--services end-->

    
    

    <!--about us  start-->

    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="vectors/about.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">Just Have a Look</h2>
            <p class="mb-4">Damn! The only decent word which comes to our mind when we hear these.
              But seriously, is there a way out? Because tbh nobody wants to pile up on them.
              But somebody has to do the job.
              So we thought of taking things in our hands and be your Assign-Man(just like spidey, batman & superman).</p>
            <!-- <ul class="ul-check mb-5 list-unstyled success">
              <li>Laborum enim quasi at modi</li>
              <li>Ad at tempore</li>
              <li>Labore quaerat esse</li>
            </ul> -->
            <p class="mb-4">Tumko lagta hai kabhi kabhi tum hi bhagwan hai? 
              Toh dude we need you on our side.  The students need you here. <a href="#">Register as a writer</a>. 
              And trust us, ghar baitho lakho chapo vala scheme nai hai.</p>
            <p><a href="works.html" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>

        
      </div>
    </div>

    <!--about us  end-->




    <!--team start-->

    <!-- <div class="site-section" id="our-team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Our Team</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p>
          </div>
        </div>
       
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Cloe Marena</h2>
              <span class="sub-title d-block mb-3">President</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">John Rooster</h2>
              <span class="sub-title d-block mb-3">Marketing</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
              
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Will Turner</h2>
              <span class="sub-title d-block mb-3">Marketing</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Nicolas Stainer</h2>
              <span class="sub-title d-block mb-3">Financing</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_5.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">George Brook</h2>
              <span class="sub-title d-block mb-3">Founder</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/person_6.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">Emely Hopson</h2>
              <span class="sub-title d-block mb-3">Marketing</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum excepturi corporis qui doloribus perspiciatis ipsa modi accusantium repellat.</p>
              
            </div>
          </div>

        </div>
      </div>
    </div> -->
    
    <!--team end-->


<section>

 <div class="jumbotron jumbotron-fluid" style="background-color:#2555a6">
  <div class="container">
    <div class="row">
    
        <div class="col-md-6">
            <h1 style="color:white" class="center">Subscribe to our newsletter</h1>
        </div>
        <div class="col-md-6 allign-center">
        <form class="form-inline mr-auto">
            <input class="form-control col-md-8" type="text" placeholder="Enter email" aria-label="Search"> <br>
            <input type="submit" value="Submit" class="btn btn-primary mr-2 mb-2" style="background-color:white; color: gray;" value="Subscribe">
            
        </form>
        </div>

    </div>
    
  </div>
 </div>

</section>


<!-- Section: Testimonials v.3 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Testimonialse</h2>
  <!-- Section description -->
  <p class="dark-grey-text w-responsive mx-auto mb-5">Here's what our clients say about us :</p>

  <!--Grid row-->
  <div class="row text-center">

    <!--Grid column-->
    <div class="col-md-4 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Parth Gite</h4>
        <h6 class="font-weight-bold blue-text my-3">Mumbai</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>I have been using bluepens service for the past few daysnow. I am proud to say they’ve always lived up to the mark and no room for complaints. The services are very prompt and they charge reasonably which is the best part. Writing material has always been very neat and tidy which has helped me score good grades whilst focusing on my other commitments. Way to go you guys!</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star-half-alt"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Jash Shah</h4>
        <h6 class="font-weight-bold blue-text my-3">Mumbai</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>Overall rating: 9/10 , Delivery: 9/10 , Rates :8/10 , Handwriting: 9/10 </p>
                                    <p>I had recently used bluepen,it made my work very easy.I just had to share my content to be written and it was done. Bluepen had completed the work within the given dates.</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Vinod Muleva</h4>
        <h6 class="font-weight-bold blue-text my-3">Mumbai</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>@BluePen11  the 
                                    Quality of work- was good and more then Average
                                    Delivery speed- was much better then expected
                                    Cost efficiency- starting rates were preferable 
                                    In short the service provided was better and it was delivered in time and if some mistakes were also changed within  short time and finally the service was good then any where else. 
                                    I have a problem of Typing as i didnt have Laptop so i gave them the work of  typing and i got in time so no further delay .......✌
                                    ✌✌ A big hand for  BluePen and Whole Team.....
                                    And many more things are coming soon stay updated .....</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="far fa-star"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->
    </div>  <!--row 1 end--->


<br><br><br>
    <!--Grid column-->
    <div class="row">    <!---grid row 2 -->
    <div class="col-md-6 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Jay Shukla</h4>
        <h6 class="font-weight-bold blue-text my-3">Mumbai</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>Quality of work: There was not at all a single stroke on the paper
                                    Neatness and cleanliness: The paper was completely clean without any sort of marks
                                    Overall experience: To be precise I would rate 10/10 to Bluepen
                                    Cost efficiency: Completely reasonable price and quite cheaper as compared to the other service providers
                                    </p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star-half-alt"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column->
    <div class="col-md-6 mb-md-0 mb-5">

      <div class="testimonial">
        <--Avatar->
        <div class="avatar mx-auto">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <--Content->
        <h4 class="font-weight-bold dark-grey-text mt-4">Naivedya Chauhan</h4>
        <h6 class="font-weight-bold blue-text my-3">Mumbai</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>I have been using blue pen services since a few days of engineering. I didn't want to write assignments because it wasted a lot of time and energy. Their quality of work has been excellent and also the content is neat and tidy and can be easily read. I had no problem in the delivery of the assignments nor did they miss any deadlines. I'm very satisfied with the whole experience and would recommend it to everyone looking to save their time.</p>
        <---Review->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
        </div>
      </div>

    </div>
    <--Grid column-->
    
    

  </div>
  <!--Grid row2 end->

</section>
<--Section: Testimonials v.3 -->
    
<br><br>


  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
<!-- <section class="subscribe-area pb-50 pt-70">

	<div class="row">

					<div class="col-md-4">
						<div class="subscribe-text mb-15">
							<span>Subscribe to our</span>
							<h2>NEWSLETTER</h2>
						</div>
					</div>
					<div class="col-md-8">
						<div class="subscribe-wrapper subscribe2-wrapper mb-15">
							<div class="subscribe-form">
								<form action="#">
									<input placeholder="enter your email address" name="email" type="email">
									<button name="submit" value="submit">subscribe <i class="fas fa-long-arrow-alt-right"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>

</section> -->

    <!--blog start

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Blue Pen Blogs</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/1.jpg" alt="Image" class="img-fluid">
              <h2><a href="#">Blog title</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="blog/blog.html">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/1.jpg" alt="Image" class="img-fluid">
              <h2><a href="#">Blog title</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="blog/blog.html">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/1.jpg" alt="Image" class="img-fluid">
              <h2><a href="#">Blog title</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="blog/blog.html">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </div>

    <!--blog end-->


    <!--contact start-->

    <!-- <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div> -->

    <!--contact end-->


    <!--footer-->

    <!-- <div class="footer py-5 text-center">
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
            -- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            -- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
            </p>
          </div>
        </div>
      </div>
    </div> -->
 
    <!-- Footer -->
<?php
include "footer.php";
?>
