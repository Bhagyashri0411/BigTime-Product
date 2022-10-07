<section class="home">

 

         <div class="swiper-slide slide" style="background:url(./assets/img/background/home.jpg) no-repeat">
            <div class="content">
               <!--<span>Experience, Support, Business Guide</span>-->
               <h3>BIGTIME TECHNOLOGY SOFTWARE DEVELOPMENT SERVICES</h3>
               <a href="./about.php" class="btn">Learn more</a>
            </div>
         </div>



</section>

<!-- ***************************ABOUT SECTION****************************** -->

<section>
   <div class="mainheading">
      <h2> About Us</h2>
   </div>
   <div class="home-about">
      <div class="content">
         <div class="about-content">
            <p>
            We are a digital transformation consultancy and software development company that provides cutting-edge engineering solutions, helping fortune 50 companies and enterprise clients untangle complex issues that always emerge during their digital evolution journey. We have delivered software services to multiple domain companies with Instant Developers, Cutting-Edge Technology, Skilled Teams, Cost-Efficiency, Confidential & Time Zone Flexibility. We are well-versed in the industry's most recent technology and trends. This ensures that we finish your project utilizing the most recent techniques and that your developers are up-to-date on the most exciting developments.
            </p>

            <div class="row">
               <div class="col-lg-4 col-md-4 pe-0">
                  <div class="about-counter">
                     <i class="fa fa-users" aria-hidden="true"></i>
                     <div class="contentdiv">
                        <h3>15+</h3>
                        <span>Years Experience</span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 pe-0">
                  <div class="about-counter">
                     <i class="fa fa-headphones" aria-hidden="true"></i>
                     <div class="contentdiv">
                        <h3>24/7</h3>
                        <span>Support</span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 pe-0">
                  <div class="about-counter">
                     <i class="fa fa-briefcase" aria-hidden="true"></i>
                     <div class="contentdiv">
                        <h3>1000+</h3>
                        <span>Business Guide</span>
                     </div>
                  </div>
               </div>
            </div>



            <div class="about-btn">
               <a href="about.php" class="learn-btn">Learn More</a>
            </div>
         </div>
      </div>
      <div class="image">
         <img src="./assets/img/background/aboutimg.jpg" alt="">
      </div>
   </div>

</section>

<!-- ***************************SERVICE SECTION****************************** -->

<section class="home-packages">
   <div class="mainheading">
      <h2> services</h2>
   </div>
   <div class="flexcontain">
      <div class="grid">
         <?php
            $json = file_get_contents('./Json/services.json');
            $data = json_decode($json);
            foreach( $data as $show){
                echo " <div class='item'  style='border-bottom-color:$show->darkorligh;background-color:$show->lightdark;' >";
                    echo "<p style='color:$show->color'>$show->para</p>";

                echo "</div>";
         }
           
          
            ?>
      </div>
   </div>

</section>

<!-- ***************************SERVICE SECTION****************************** -->


<section class="services">

   <div class="mainheading">
      <h2>our services</h2>
   </div>

   <div class="box-container">

      <div class="box">
         <i class="fa-solid fa-code"></i>
         <h3>Front-end</h3>
      </div>

      <div class="box">
         <i class="fa-solid fa-gears"></i>
         <h3>Back-end</h3>
      </div>

      <div class="box">
         <i class="fa-solid fa-wrench"></i>
         <h3>Protocols</h3>
      </div>

      <div class="box">
         <!-- <i class="fa-solid fa-key"></i> -->
         <i class="fa-solid fa-circle-nodes"></i>
         <h3>API </h3>
      </div>

      <div class="box">
         <i class="fa-solid fa-laptop-code"></i>
         <h3>Data formats </h3>
      </div>



   </div>
</section>

<!-- ***************************inquiry SECTION****************************** -->


<?php
include './Components/contact.html'
?>

<!-- ***************************SERVICES SECTION****************************** -->

<!-- <section class="container service">
   <div class="mainheading">
      <h2> <strong class="text-[#303841]">
            45+ SOFTWARE </strong> TYPES OF SERVICES WE PROVIDE.</h2>
      <p>
         We offer extensive domain understanding and a thorough knowledge of the context in which software operates
         in addition to our in-depth <br>
         understanding of software architecture and coding standards. For the abovementioned use cases, we create
         SaaS products <br>
         as well as web, mobile, desktop, and cloud applications.</p>
   </div>

   <div class="containeser" style='max-width: 1100px;'>
      <div class="serviceitem">
         <div class="containeser">
            <div
               class="serviceimage">
            </div>
         </div>
      </div>
      <div class="serviceitem">
         <div class="containeser">
            <div class="item">
               <div class="containeser">
                  <div class="flex flex-[0_0_50%] max-w-[50%] min-w-[50%] max-h-full bg-[#303841] text-white ">
                     <div class="px-[30px] flex justify-center flex-col max-w-full">
                        <h1> Productivity</h1>
                        <ul class="my-[25px] text-[16px]">
                           <li> 1) Digital workplace</li>
                           <li> 2) Project management</li>
                        </ul>
                     </div>
                  </div>
                  <div
                     class=" bg-[url('./../assets/img/45ser/Enterprise.jpg')] min-h-[281px] max-w-[50%] min-w-[50%] flex">
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="containeser">
                  <div
                     class=" bg-[url('./../assets/img/45ser/knowledge.jpg')] min-h-[281px] max-w-[50%] min-w-[50%] flex">
                  </div>
                  <div class="flex flex-[0_0_50%] max-w-[50%] min-w-[50%] max-h-full bg-[#303841] text-white">
                     <div class="px-[30px] flex justify-center flex-col max-w-full">
                        <h1> Enterprise software</h1>
                        <ul class="my-[25px] text-[16px]">
                           <li> 1) Supply chain </li>
                           <li> 2) Financial management</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->