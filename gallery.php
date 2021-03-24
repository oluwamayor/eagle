<?php
include("logic/header.php");
?>
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 33.3%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  filter: grayscale(1) brightness(0.5);
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s linear;
}
.column img:hover {
  filter: grayscale(0);
}
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
  .column img {
    filter: grayscale(0) brightness(1);
  }
}

</style>
<section class="space sub-header">
<div class="container container-custom">
<div class="row">
<div class="col-md-6">
<div class="sub-header_content">
<p>Our Gallery</p>
<h3>Your eyes are even smaller, yet they behold the world.</h3>
<span><i>Rumi</i></span>
</div>
</div>
<div class="col-md-6">
<div class="sub-header_main">
<h2>Our Gallery</h2>
</div>
</div>
</div>
</div>
</section>

<div class="container-fluid">
    <div class="row">
      <div class="column">
        <img src="images/gallery/17.jpg" />
        <img src="images/gallery/19.jpg" />
        <img src="images/gallery/14.jpg" />
       
      </div>
      <div class="column">
      <img src="images/gallery/24.jpg" />
        <img src="images/gallery/30.jpg" />
        <img src="images/gallery/25.jpg" />
        <img src="images/gallery/29.jpg" />

      
      </div>
      <div class="column">
      <img src="images/gallery/8.jpg" />
      <img src="images/gallery/7.jpg" />
      <img src="images/gallery/16.jpg" />
        
      </div>
    </div>
  </div>

<?php
include("logic/footer.php");
?>