<?php 
include("connection.php");

    $sql = "SELECT * from `service`";
    $fire = $connect->query($sql);

    $sql1 = "SELECT * from `managementteam` limit 4";
    $fire1 = $connect->query($sql1);

    $sql2 = "SELECT * from `blog` limit 3";
    $fire2 = $connect->query($sql2);

    $sql3 = "SELECT * from `washpoint`";
    $fire3 = $connect->query($sql3);

    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Klean Services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.php">
                                <h1>Klean<span>Services</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Sat </p><p>9:00 AM - 7:00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>096116 68668</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>kleanservices@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
                            <a href="location.php" class="nav-item nav-link">Washing Points</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                    <!--<a href="single.php" class="dropdown-item">Detail Page</a>-->
                                    <a href="team.php" class="dropdown-item">Team Member</a>
                                    <!--<a href="price.php" class="dropdown-item">Schedule Booking</a>-->
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="Admin" class="nav-item nav-link">admin</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="price.php">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel001.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                            We love doing the car wash. It’s a lot of fun and a great way to reach out to the local community and serve with no strings attached.
                            </p>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Your car, our care.</h1>
                            <p>
                            The trusted hand car wash service, No one else does it like we do.
                            </p>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                            We give it a showroom shine every time.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                            Klean Services is karnataka’s leading professional hand wash & detailing provider. For over 10 years Klean has remained a family owned.Our worker are well professionals and hard worker. Klean worker are highly skilled with an experience in the trades. 
                            </p>
                            <p>Klean prides itself on offering an unrivalled service and is determined that every customer enjoys that new car feeling.</p>
                            <p>Klean aims to make cleaning your car an affordable and convenient experience in our any car point. All our locations live up to the same  Car Wash quality.</p>
                            <p>Some of our services are-</p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Deep Dry Cleaning</li>
                            </ul>
                            <a class="btn btn-custom" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
                    <?php while($row = mysqli_fetch_assoc($fire)) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="<?= $row['icon'] ?>"></i>
                            <h3><?= $row['name'] ?></h3>
                            <p><?= $row['content'] ?></p>
                        </div>
                    </div>
                    <?php } ?>

                    
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">10</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">150</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">4000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span></span><strong>399</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span></span><strong>999</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span></span><strong>1299</strong><span>Rs/-</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Washing Points</p>
                            <h2>Car Washing & Care Points</h2>
                        </div>
                        <div class="row">
                            <?php while($point = mysqli_fetch_assoc($fire3)){ ?>

                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3><?= $point['point_name'] ?></h3>
                                        <p><?= $point['point_address'] ?></p>
                                        
                                        
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Our Maneger & Workers</h2>
                </div>
                <div class="row">
      
                <?php while($team = mysqli_fetch_assoc($fire1)){ ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="Admin/DBimages/<?= $team['image'] ?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2><?= $team['name'] ?></h2>
                                <p><?= $team['post'] ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                    


                </div>
            </div>
        </div>
        <!-- Team End -->
        
    


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    <?php while($blog = mysqli_fetch_assoc($fire2)){ ?>

                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="Admin/DBimages/<?= $blog['image'] ?>" alt="Image">
                                <div class="meta-date">
                                    <span>09</span>
                                    <strong>Jan</strong>
                                    <span>2022</span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog.php"><?= $blog['title'] ?></a></h3>
                                <p>
                                <?= $blog['content'] ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-folder"></i><a href="">Tips</a></p>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        
            <?php include ("footer.php") ?>

        <!-- Footer End -->
                <!--Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
                <h4 class="modal-title">Car Wash Booking</h4>
                </div>
                <div class="modal-body">
   
                                <p>
                        <select name="packagetype" required class="form-control" id="package">
                            <option value="">Package Type</option>
                            <option >BASIC CLEANING (399 Rs/-)</option>
                            <option >PREMIUM CLEANING (999 Rs/-)</option>
                            <option >COMPLEX CLEANING(1299 Rs/-)</option>
                            
                        </select>

          
                            <p><input type="text" id="fname" class="form-control" required placeholder="Full Name"></p>
                            <p><input type="text" id="contact" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only"  required placeholder="Mobile No."></p>
                            <p>Wash Date <br /><input type="date" id="washdate" required class="form-control"></p>
                            <p>Wash Time <br /><input type="time" id="washtime" required class="form-control"></p>
                            <p><textarea id="message"  class="form-control" placeholder="Describe your car model"></textarea></p>
                            <p><button type="submit" class="btn btn-custom" onclick="addrecord()">book Now</button></p>
                            <p>Your booking will be confirm only if agency calls you !</p>
      
                </div>
             <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
    </div>
     
    </div>
</div>
      

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>

        //add record function..
        function addrecord() {
            // storing all the inputs by user in variable 

            let name = $('#fname').val();
            let contact = $('#contact').val();
            let date = $('#washdate').val();
            let time = $('#washtime').val();
            let package = $('#package').val();
            let message = $('#message').val();
            

            if (name != '' && contact != '' && package != ''  ) {

                $.ajax({

                    url: "booking_process.php",
                    type: "post",
                     data: {
                        name: name,
                        contact: contact,
                        date: date,
                        time: time,
                        package: package,
                        message: message

                        
        },

        success: function (data, status) {
            $('#fname').val(""); //  reseting the value back to null
            $('#message').val("");
            $('#contact').val("");
            $('#washdate').val("");
            $('#washtime').val("");
            $('#package').val("");
            
            
            alert('booking completed');
           
            
                   }
                });


            } else {

                alert("please fill everything in the Service form");
            };



        }       
    </script>
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
