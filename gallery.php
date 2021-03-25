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
.details{
    display:flex;
    flex-position:flex-end;
    position:relative;
    top:-30px;
    font-size:20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color:#fff;

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
          <div class="small">
          <img src="images/gallery/17.jpg" />
          <div class="details">
              <span class="span">George Amani</span>
          </div>
          </div>
       
       <div class="small">
       <img src="images/gallery/19.jpg" />
       <div class="details">
              <span class="span">George Amani</span>
          </div>
       </div>
       


        <img src="images/gallery/14.jpg" />
        <div class="details">
              <span class="span">George Amani</span>
          </div>
       
      </div>
      <div class="column">
      <img src="images/gallery/24.jpg" />
      <div class="details">
              <span class="span">George Amani</span>
          </div>
        <img src="images/gallery/30.jpg" />
        <div class="details">
              <span class="span">George Amani</span>
          </div>
        <img src="images/gallery/25.jpg" />
        <div class="details">
              <span class="span">George Amani</span>
          </div>
      

      
      </div>
      <div class="column">
      <img src="images/gallery/8.jpg" />
      <div class="details">
              <span class="span">George Amani</span>
          </div>
      <img src="images/gallery/7.jpg" />
      <div class="details">
              <span class="span">George Amani</span>
          </div>
      <img src="images/gallery/16.jpg" />
      <div class="details">
              <span class="span">George Amani</span>
          </div>
      <img src="images/gallery/29.jpg" />
      <div class="details">
              <span class="span">George Amani</span>
          </div>
        
      </div>
    </div>
  </div>

<?php
include("logic/footer.php");
?>