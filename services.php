<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include './jsfileconnection/head.html';
    ?>

</head>

<body>

  <!-- header section starts  -->

  <?php
    include './Components/header.html';
    ?>
  <div class="heading" style="background:url(./assets/img/background/cover.png) no-repeat">
    <div class="inner-banner">
      <div class="mainheading">
        <h2> <strong> Services </strong> </h2>
        <p>The Finest Ideas For Developing Your Business.

        </p>
      </div>
      <div class="inner-title text-center">
        <ul>
          <li><a href="home">Home</a></li>
          <li><i class="bx bxs-chevron-right"></i></li>
          <li>Services</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="service">
    <div class='container'>
    <div class="mainheading">
      <h2> <strong class="text-[#303841]">
          45+ SOFTWARE </strong> TYPES OF SERVICES WE PROVIDE.</h2>
      <p style='margin-bottom:30px'>
        We offer extensive domain understanding and a thorough knowledge of the context in which software operates
        in addition to our in-depth 
        understanding of software architecture and coding standards. For the abovementioned use cases, we create
        SaaS products 
        as well as web, mobile, desktop, and cloud applications.</p>
    </div>

      <div class="swiper home-slider">

        <div class="swiper-wrapper">
          <?php
            $jsonfile = file_get_contents('./Json/slidejson.json');
            $data = json_decode($jsonfile);
            foreach($data as $show)
            {
              echo "<div class= 'swiper-slide slide'>
                <div class='item'>
                  <picture>
                    <img src= $show->img alt='$show->head' title='$show->head' class=system-slider-img>
                  </picture>
                  <div class=boxed>
                    <h3 class='h1 font-bold mb-5'>$show->head</h3>
                    <p class=mb-3>$show->para</p>

                  </div>
                </div>
              </div>";
            }
            ?>
        </div>
        <div class="slider__controls">
          <div class="slider__pagination"></div>
        </div>
        <div class="owl-nav">
          <button type="button" role="presentation" class="owl-prev">
            <span aria-label="Previous">‹</span>
          </button>
          <button type="button" role="presentation" class="owl-next">
            <span aria-label="Next">›</span>
          </button>
        </div>

      </div>
    </div>

  </section>

  <?php
include './jsfileconnection/js.html';
include './Components/footer.html'
?>
</body>

</html>