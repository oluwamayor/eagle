<footer>
    <div class="container container-custom">
    <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-4">
         <div class="foot-contact-block">
        <img src="images/log.png" class="img-fluid" alt="#" style="border-radius: 15px;" />
    <p>
        Eaglevision Eye Care Centre is made up of a team of eye care providers dedicated to the provision of Professional Eye Care Services to the public at an affordable rate.
    </p>
    <a href="tel:+2349090055448" style="text-decoration: none;">
    <h4><i class="fas fa-phone"></i>+234 9090 055 448</h4>
    </a>
    <a href="tel:+2348118878849" style="text-decoration: none;">
        <h4><i class="fas fa-phone"></i>+234 8118 878 849</h4>
        </a>
    <a href="mailto:info@eaglevisionltd.com" style="text-decoration: none;">
    <h4><i class="far fa-envelope"></i><span>info@eaglevisionltd.com</span></h4>
    </a>
          </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
    <div class="foot-link-box">
    <h4>Quick Links</h4>
    <ul>
    <li>
    <a href="about"><i class="fas fa-angle-double-right"></i>About Us</a>
    </li>
  
    <li>
    <a href="services"><i class="fas fa-angle-double-right"></i>Our Services</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Gallery</a>
    </li>
    <li>
    <a href="contact"><i class="fas fa-angle-double-right"></i>Contact Us</a>
    </li>
   
    </ul>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2">
    <div class="foot-link-box">
    <h4>Our Services</h4>
    <ul>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Cataract Screening</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Glaucoma Screening</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Lens Services</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Eye Checkup</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Optical Services</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-angle-double-right"></i>Retina Services</a>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-4 col-lg-2 offset-lg-1">
    <div class="foot-link-box footlink-box_btn">
    <a href="https://doctorcare247.com/" class="btn btn-outline-success">Find a Doctor</a>
    <a href="" class="btn btn-outline-success">Career</a>
    <a href="https://www.medicalnewstoday.com/newsletter" class="btn btn-outline-success">Newsletter</a>
    <ul>
    <li>
    <a href="https://web.facebook.com/eaglevisionng"><i class="fab fa-facebook-f"></i></a>
    </li>
    <li>
    <a href="https://twitter.com/eaglevision_ng"><i class="fab fa-twitter"></i></a>
    </li>
    <li>
    <a href="https://www.instagram.com/eaglevisionng/"><i class="fab fa-instagram"></i></a>
    </li>
    <li>
    
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="copyright">
    <p>© Eaglevision Eye Care Center 2021 All rights Reserved. Developed by <a href="https://cogniko.com" target="_blank" style="color: #B5B5B6;">Cogniko</a></p>
    <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
    </div>
    </div>
    </div>
    </div>
    </footer>

    <script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "index.php"
    })
    .when("/about", {
        templateUrl : "about.php"
    })
    .when("/services", {
        templateUrl : "services.php"
    })
    .when("/appointment", {
        templateUrl : "appointment.php"
    })
    .when("/contact", {
        templateUrl : "contact.php"
    });
});
</script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/slick.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>