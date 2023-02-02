<?php 
 require_once("connection.php");

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

       $sql = "INSERT into `newsletter` (`name`,`email`) values ('$name','$email')";
       $fire = $connect->query($sql);

       if ($fire){
        echo '<script> alert("newsletter subscribed")</script>';
       }else{
        echo '<script> alert("eroor")</script>';
       }
 }

?>


<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Panduranga Nagar Bangalore ,karnataka </p>
                            <p><i class="fa fa-phone-alt"></i>096116 68668</p>
                            <p><i class="fa fa-envelope"></i>kleanservices@gmail.com</p>
                            <div class="footer-social">
                                <!-- <a class="btn" href=""><i class="fab fa-twitter"></i></a>-->
                                 <a class="btn" href="https://m.facebook.com/103021889183629/"><i class="fab fa-facebook-f"></i></a> 
                                <a class="btn" href="https://m.youtube.com/channel/UCQh_wZVuSJUkhqRdz8bhBSw"><i class="fab fa-youtube"></i></a>
                                <a class="btn" href="https://instagram.com/_klean_services_?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                <!--<a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                        
                            <h2>Popular Links</h2>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="service.php">Our Service</a>
                            <a href="location.php">Service Points</a>
                            <a href="price.php">Pricing Plan</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                <input class="form-control" placeholder="Full Name" name="name">
                                <input class="form-control" placeholder="Email" name="email">
                                <button class="btn btn-custom" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Klean Services</a>, All Right Reserved. Designed By <a href="#">BlueChips Solutions (Mokshada Yadav)</a></p>
            </div>
        </div>