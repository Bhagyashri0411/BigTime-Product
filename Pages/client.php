<section class="reviews">

<div class="mainheading">
        <h2>our clients</h2>
    </div>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
<?php
         $json = file_get_contents('./Json/imagedata.json');
         $excute = json_decode($json);

         foreach($excute as $show){
            echo "<div class='swiper-slide slide'>";
               echo "<h3>$show->name</h3>";
               echo "<img src=$show->image alt=>";
            echo "</div>";
         }
         ?>

      </div>
   </div>

</section>