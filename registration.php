<?php
include("logic/connect.php");
?>
<?php
include("logic/header.php");
?>

<?php
include("logic/regis.php");
?>


<section class="space sub-header">
<div class="container container-custom">
<div class="row">
<div class="col-md-6">
<div class="sub-header_content">
 <p>REGISTRATION </p>
<h3>The sky is the daily bread of the eyes.</h3>
<span><i>Ralph Waldo Emerson</i></span>
</div>
</div>
<div class="col-md-6">
<div class="sub-header_main">
<h2>Registration </h2>
</div>
</div>
</div>
</div>
</section>



<section class="space">
<div class="container container-custom">
<div class="row">
<div class="col-md-5">
<div class="contact-box">

<div class="contact-title">
<h4 style="visibility:hidden">Please Fill in the Fields</h4>
<img src="images/regis.jpg" style="width:100%" alt="">
</div>

</div>

</div>
<div class="col-md-7">
<div class="get-in-touch get-in-touch-style2">
<img src="images/contact-form-bg.png" class="img-fluid get-in-bg" alt="#">
<h3>Join Eaglevison Eye Care Center</h3>
<form  method="POST" action="" >
                                
                         
<div class="row">
<div class="col-md-6">
<div class="form-group">
<select  id="" name="title" class="form-control" style="height:50px;font-size:1rem;color:#000" required>
<option selected>Title</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
</select>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input  type="text" class="form-control" name="fname" placeholder="Full Name" required style="font-size:1rem;color:#000" required>
<i class="far fa-user"></i>
</div>
</div>


</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="number" style="font-size:1rem;color:#000" class="form-control" name="phone" pattern="[0-9]*" inputmode="numeric" placeholder="Your Phone Number" required>
<i class="fas fa-phone"></i>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="email"  class="form-control" name="email" placeholder="Your Email"  style="font-size:1rem;color:#000" required>
<i class="far fa-envelope"></i>
</div>
</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" style="font-size:1rem;color:#000" class="form-control" name="hadd"  placeholder="Home Address" required>
<i class="fas fa-envelope"></i>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" style="font-size:1rem;color:#000" class="form-control" name="oadd"  placeholder="Office Address" required>
<i class="fas fa-envelope"></i>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" style="font-size:1rem;color:#000" class="form-control" name="job"  placeholder="Job Description">
<i class="fas fa-envelope"></i>
</div>
</div>



</div>

<div class="row">
<div class="col-md-12">
<div class="form-group textarea-icon">
<textarea  style="font-size:1rem;color:#000" class="form-control" name="msg"  placeholder="Health history..if any" id="" rows="3"></textarea>
<i class="far fa-envelope"></i>
<button type="submit" class="btn btn-success" name="register">Join Us</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<section class="map">
<div class="container container-custom">
<div class="row">
<div class="col-md-12">
<iframe width="100%" height="450" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7286885532562!2d3.4622808147024045!3d6.428890995348687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf5a8b0fa3f6d%3A0xf2ed6139db3a3c7e!2s124%20T.%20F.%20Kuboye%20Rd%2C%20Lekki%20Phase%20I%2C%20Lagos!5e0!3m2!1sen!2sng!4v1614809915339!5m2!1sen!2sng" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
</div>
</div>
</section>




<?php
include("logic/footer.php");
?>