
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


<style>
            .single-fact {
                text-align: center;
                margin: 45px 0;
                padding: 8px 16px;
                border-right: 1px solid #ddd;
            }
            .single-fact i{
                color: #000;
            }

            .single-fact h2 {
                font-size: 36px;
                margin-top: 10px;
                font-weight: 400;
            }

            .single-fact p {
                font-size: 14px;
            }

            .fact-box {
                box-shadow: 0px 20px 30px rgba(153, 153, 153, 0.2);
            }
            h2 {
                color: #000;
                text-align: center;
                text-transform: uppercase;
                font-family: "Roboto", sans-serif;
                font-weight: bold;
                position: relative;
                margin: 20px 0 30px;
            }

            .col-center {
                margin: 0 auto;
                float: none !important;
            }

            .carousel {
                margin: 50px auto;
                padding: 0 70px;
            }

            .carousel .item {
                color: #000;
                font-size: 14px;
                text-align: center;
                overflow: hidden;
                min-height: 290px;
            }

            .carousel .item .img-box {
                width: 135px;
                height: 135px;
                margin: 0 auto;
                padding: 5px;
                border: 1px solid #ddd;
                border-radius: 50%;
            }

            .carousel .img-box img {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 50%;
            }

            .carousel .testimonial {
                padding: 30px 50px 10px;
            }

            .carousel .overview b {
                text-transform: uppercase;
                color: #7AA641;
            }

            .carousel .carousel-control {
                width: 40px;
                height: 40px;
                margin-top: -20px;
                top: 50%;
                background: none;
            }

            .carousel-control i {
                font-size: 68px;
                line-height: 40px;
                position: absolute;
                display: inline-flex;
                color: rgba(0, 0, 0, 0.8);
                text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
            }

            .carousel .carousel-indicators {
                bottom: -40px;
            }

            .carousel-indicators li,
            .carousel-indicators li.active {
                width: 15px;
                height: 1.5px;
                margin: 1px 2px;
                border-radius: 50%;
            }

            .carousel-indicators li {
                background: #000;
                border-color: transparent;
                box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
            }

            .carousel-indicators li.active {
                background: #000;
                box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
            }
  </style>          
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
    <!--crousal end->

  
 
  <--counters start-->
  <br><br><br>
        <section class="fact-area">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
                    <div class="col-7 text-center  mb-5">
                        <h2 class="section-title">Facts</h2>
                        <p class="lead">Did you ever thought of these</p>
                    </div>
                </div>
                <div class="fact-box">
                    <div class="row">
                        <div class="col-lg col-6 single-fact">
                            <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                            <h2 class="count" data-target="20">20</h2>
                            <p>Age</p>
                        </div>
                        <div class="col-lg col-6 single-fact">
                            <i class="fa fa-battery-quarter fa-4x" aria-hidden="true"></i>
                            <h2 class="count" data-target="100">100</h2>
                            <p>Stress Level</p>
                        </div>
                        <div class="col-lg col-6 single-fact">
                            <i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
                            <h2 class="count" data-target="8750">8750</h2>
                            <p>Hours Per Day</p>
                        </div>
                        <div class="col-lg col-6 single-fact">
                            <i class="fa fa-pencil fa-4x" aria-hidden="true"></i>
                            <h2 class="count" data-target="100">100</h2>
                            <p>Hours Spent In Assignment</p>
                        </div>
                    </div>
                </div>
        </section>
   
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

  <!---testimonial starts-->
  <div class="container">
            <div class="row">
                <div class="col-md-8 col-center m-auto">
                    <h2>Testimonials</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img src="images/Parth Gite.jpeg" alt=""></div>
                                <p class="testimonial">I have been using bluepens service for the past few daysnow. I am
                                    proud to say they’ve always lived up to the mark and no room for complaints. The
                                    services are very prompt and they charge reasonably which is the best part. Writing
                                    material has always been very neat and tidy which has helped me score good grades
                                    whilst focusing on my other commitments. Way to go you guys!</p>
                                <p class="overview"><b>Parth Gite</b>, Mumbai</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="images/Jash Shah.jpeg" alt=""></div>
                                <p class="testimonial">Overall rating: 9/10 , Delivery: 9/10 , Rates :8/10 ,
                                    Handwriting: 9/10 </p>
                                <p>I had recently used bluepen,it made my work very easy.I just had to share my content
                                    to be written and it was done. Bluepen had completed the work within the given
                                    dates.</p>
                                <p class="overview"><b>Jash Shah</b>, Mumbai</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="images/Vinod Muleva.jpeg" alt=""></div>
                                <p class="testimonial">@BluePen11 the
                                    Quality of work- was good and more then Average
                                    Delivery speed- was much better then expected
                                    Cost efficiency- starting rates were preferable
                                    In short the service provided was better and it was delivered in time and if some
                                    mistakes were also changed within short time and finally the service was good then
                                    any where else.
                                    I have a problem of Typing as i didnt have Laptop so i gave them the work of typing
                                    and i got in time so no further delay .......✌
                                    ✌✌ A big hand for BluePen and Whole Team.....
                                    And many more things are coming soon stay updated .....</p>
                                <p class="overview"><b>Vinod Muleva</b>, Mumbai</p>
                            </div>
                            <div class="item carousel-item ">
                                <div class="img-box"><img src="images/Avdhut Zolekar.jpeg" alt=""></div>
                                <p class="testimonial">Quality of work- Very good. The diagrams were neat, clean and
                                    dark. Couldn’t ask for more.
                                    Delivery speed- 10/10. They delivered all the three assignments in a span of two
                                    days.
                                    Cost efficiency- Very cost efficient, considering the time and work. Costing was
                                    pretty reasonable.

                                    I’d recommend bluepen to everyone who’s struggling with their assignments and work.
                                    Helped a lot for me.</p>
                                <p class="overview"><b>Avdhut Zolekar</b>, Mumbai</p>
                            </div>
                            <div class="item carousel-item ">
                                <div class="img-box"><img src="images/Jay Shukla.jpeg" alt=""></div>
                                <p class="testimonial">Quality of work: There was not at all a single stroke on the
                                    paper
                                    Neatness and cleanliness: The paper was completely clean without any sort of marks
                                    Overall experience: To be precise I would rate 10/10 to Bluepen
                                    Cost efficiency: Completely reasonable price and quite cheaper as compared to the
                                    other service providers
                                </p>
                                <p class="overview"><b>Jay Shukla</b>, Mumbai</p>
                            </div>
                            <!--div class="item carousel-item ">
                                <div class="img-box"><img src="" alt=""></div>
                                <p class="testimonial">I have been using blue pen services since a few days of engineering. I didn't want to write assignments because it wasted a lot of time and energy. Their quality of work has been excellent and also the content is neat and tidy and can be easily read. I had no problem in the delivery of the assignments nor did they miss any deadlines. I'm very satisfied with the whole experience and would recommend it to everyone looking to save their time.</p>
                                <p class="overview"><b>Naivedya Chauhan</b>, Mumbai</p>
                            </div>
                        </div-->
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel"
                                data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--testimonial ends-->    
<br><br>


   
    <!-- Footer -->
<?php
include "footer.php";
?>
