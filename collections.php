<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/collect.css">

  <!-- Demo styles -->
  
</head>

<body>
  <div class="txt">
    <h2>Welcome To Our Show Room</h2>
  </div>


  

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
    
        <div class="swiper-slide">
           <div class="imgBx">
              <img src="images/glasses/Alain-mikli-1-2-500x375.png">
           </div>
           <div class="details">
           <h3><span>Alain-mikli</span></h3>
           </div>
        </div>
     
                 
      <div class="swiper-slide"> 
        <div class="imgBx">
        <img src="images/glasses/Alain-mikli-2-1-500x375.png">
        </div>
        <div class="details">

           <h3><span>Alain-mikli</span></h3>
         </div>
      </div>

      <div class="swiper-slide">
        <div class="imgBx">
       <img src="images/glasses/Alain-mikli-3-500x375.png">
        </div>
        <div class="details">
           <h3><span>Alain-mikli</span></h3>
         </div>
     </div>


      <div class="swiper-slide"> 
       <div class="imgBx">
        <img src="images/glasses/Chopard-1-500x375.png">
       </div>
       <div class="details">
           <h3><span>Chopard</span></h3>
         </div>
      </div>


      <div class="swiper-slide">
       <div class="imgBx">
       <img src="images/glasses/Bvlgari-500x375.png">
       </div>
       <div class="details">
          <h3><span>Bvlgari</span></h3>
        </div>
     </div>

      <div class="swiper-slide">
       <div class="imgBx">
       <img src="images/glasses/Bvlgari-BLACK-500x375.png">
       </div>
       <div class="details">
          <h3><span>Bvlgari-BLACK</span></h3>
        </div>
     </div>
      <div class="swiper-slide"> 
       <div class="imgBx">
        <img src="images/glasses/Bvlgari-BLUE-FRONT-500x375.png">
       </div>
       <div class="details">
             <h3><span>Bvlgari-BLUE</span></h3>
           </div>
      </div>

      <div class="swiper-slide"> 
       <div class="imgBx">
        <img src="images/glasses/Bvlgari-GOLD-FRONT-500x375.png">
       </div>
       <div class="details">
               <h3><span>Bvlgari-GOLD</span></h3>
        </div>
      </div>


      <div class="swiper-slide"> 
       <div class="imgBx">
        <img src="images/glasses/chopard-gold4-500x375.png">
       </div>
       <div class="details">
                  <h3><span>chopard-gold</span></h3>
        </div>
      </div>
    

      <div class="swiper-slide">  
       <div class="imgBx">
        <img src="images/glasses/gucci-brown-500x375.png">
        <div class="details">
           <h3><span>gucci-brown</span></h3>
         </div>
       </div>
      </div>
            
  
      </div>
    </div>
    <!-- Add Pagination -->
   


<div class="btn">
  <a href="index">
    <span></span>
     <span></span>
      <span></span>
       <span></span>
    End Show
  </a>
</div>
 












<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows: true,
      },
       loop:true,
       autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
  
</body>

</html>