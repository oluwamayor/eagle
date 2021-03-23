<?php
include("logic/header.php");
?>
<style>

::selection{
  color: #fff;
  background: #007bff;
}

.wrapper{
  margin: 100px auto;
  max-width: 1100px;
}
.wrapper nav{
  display: flex;
  justify-content: center;
}
.wrapper .items{
  display: flex;
  max-width: 720px;
  width: 100%;
  justify-content: space-between;
}
.items span{
  padding: 7px 25px;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  color: #007bff;
  border-radius: 50px;
  border: 2px solid #007bff;
  transition: all 0.3s ease;
}
.items span.active,
.items span:hover{
  color: #fff;
  background: #007bff;
}

.gallery{
  display: flex;
  flex-wrap: wrap;
  margin-top: 30px;
}
.gallery .image{
  width: calc(100% / 4);
  padding: 7px;
}
.gallery .image span{
  display: flex;
  width: 100%;
  overflow: hidden;
}
.gallery .image img{
  width: 100%;
  vertical-align: middle;
  transition: all 0.3s ease;
}
.gallery .image:hover img{
  transform: scale(1.1);
}
.gallery .image.hide{
  display: none;
}
.gallery .image.show{
  animation: animate 0.4s ease;
}
@keyframes animate {
  0%{
    transform: scale(0.5);
  }
  100%{
    transform: scale(1);
  }
}

.preview-box{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.9);
  background: #fff;
  max-width: 700px;
  width: 100%;
  z-index: 5;
  opacity: 0;
  pointer-events: none;
  border-radius: 3px;
  padding: 0 5px 5px 5px;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
}
.preview-box.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
  transition: all 0.3s ease;
}
.preview-box .details{
  padding: 13px 15px 13px 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.details .title{
  display: flex;
  font-size: 18px;
  font-weight: 400;
}
.details .title p{
  font-weight: 500;
  margin-left: 5px;
}
.details .icon{
  color: #007bff;
  font-style: 22px;
  cursor: pointer;
}
.preview-box .image-box{
  width: 100%;
  display: flex;
}
.image-box img{
  width: 100%;
  border-radius: 0 0 3px 3px;
}
.shadow{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  display: none;
  background: rgba(0,0,0,0.4);
}
.shadow.show{
  display: block;
}

@media (max-width: 1000px) {
  .gallery .image{
    width: calc(100% / 3);
  }
}
@media (max-width: 800px) {
  .gallery .image{
    width: calc(100% / 2);
  }
}
@media (max-width: 700px) {
  .wrapper nav .items{
    max-width: 600px;
  }
  nav .items span{
    padding: 7px 15px;
  }
}
@media (max-width: 600px) {
  .wrapper{
    margin: 30px auto;
  }
  .wrapper nav .items{
    flex-wrap: wrap;
    justify-content: center;
  }
  nav .items span{
    margin: 5px;
  }
  .gallery .image{
    width: 100%;
  }
}

</style>

<section class="space sub-header">
<div class="container container-custom">
<div class="row">
<div class="col-md-6">
<div class="sub-header_content">
<p>OUR GALLERY</p>
<h3>Of all the senses, sight must be the most delightful.</h3>
<span><i>Hellen Keller</i></span>
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


<div class="wrapper">
    <!-- filter Items -->
    <nav style="visibility:hidden; height:10px">
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="bag">Bag</span>
        <span class="item" data-name="shoe">Shoe</span>
        <span class="item" data-name="watch">Watch</span>
        <span class="item" data-name="camera">Camera</span>
        <span class="item" data-name="headphone">Headphone</span>
      </div>
    </nav>

   
<h3 style="text-align:center;color:#456ED2">Check out our Gallery Section</h3>

    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="bag"><span><img src="images/gallery/7.jpg" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="images/gallery/14.jpg" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="images/gallery/25.jpg" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="images/gallery/8.jpg" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="images/gallery/19.jpg" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="images/gallery/16.jpg" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="images/gallery/17.jpg" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="images/gallery/24.jpg" alt=""></span></div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title"> <p style="visibility:hidden"></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <script src="js/gallery.js"></script>


<?php
include("logic/footer.php");
?>