<section class="home">

   <div class="slide" style="background:url(./assets/img/background/home.jpg) no-repeat">
      <div class="content">
         <h3><strong style='font-weight: 600'>BIGTIME </strong>TECHNOLOGY <strong style='font-weight: 600'> SOFTWARE
            </strong> DEVELOPMENT <strong style='font-weight: 600'> SERVICES </strong></h3>
         <div class="about-btn">
            <a href="contact-us" class="learn-btn" style='background-color:#fe6d0c;margin: 25px 0'>Request proposal</a>
         </div>
      </div>
   </div>

</section>

<!-- ***************************ABOUT SECTION****************************** -->

<div class='aboutsvg'>

   <section>
      <div class="mainheading">
         <h2> About Us</h2>
      </div>
      <div class=" home-about">
         <div class="content">
            <div class="about-content">
               <p>
                  We are a digital transformation consultancy and software development company that provides
                  cutting-edge
                  engineering solutions, helping fortune 50 companies and enterprise clients untangle complex issues
                  that
                  always emerge during their digital evolution journey. We have delivered software services to multiple
                  domain companies with Instant Developers, Cutting-Edge Technology, Skilled Teams, Cost-Efficiency,
                  Confidential & Time Zone Flexibility. We are well-versed in the industry's most recent technology and
                  trends. This ensures that we finish your project utilizing the most recent techniques and that your
                  developers are up-to-date on the most exciting developments.
               </p>


               <div class="about-btn">
                  <a href="about-us" class="learn-btn">Learn More</a>
               </div>
            </div>
         </div>
         <div class="image">
            <img src="./assets/img/background/aboutimg.jpg" alt="">
         </div>
      </div>
   </section>

</div>

<!-- ***************************counters SECTION****************************** -->

<section class='counter'>
   <div  class="row bg-image rocket-lazyload entered" >


      <div class="col-lg-3 col-md-6 p-0 text-center">

         <div class="bord bord-0">

         <div class="about-counter">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="contentdiv">
                           <h3 class='counterss counter'>17000+</h3>
                           <span>Working Hours</span>
                        </div>
                     </div>

         </div>

      </div>


      <div class="col-lg-3 col-md-6 p-0 text-center">

         <div class="bord bord-1">
         <div class="about-counter">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                        <div class="contentdiv">
                           <h3 class='counterss counter'>24/7</h3>
                           <span>Support</span>
                        </div>
                     </div>

         </div>

      </div>


      <div class="col-lg-3 col-md-6 p-0 text-center">

         <div class="bord bord-2">

         <div class="about-counter">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <div class="contentdiv">
                           <h3 class='counterss counter'>300+</h3>
                           <span>Projects Delivered</span>
                        </div>
                     </div>
         </div>

      </div>


      <div class="col-lg-3 col-md-6 p-0 text-center">

         <div class="bord bord-3" style='border-right:0'>

         <div class="about-counter">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <div class="contentdiv">
                           <h3 class='counterss counter'>50+</h3>
                           <span>Technology supports</span>
                        </div>
                     </div>

         </div>

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
         <img src="./assets/img/background/home/frontend.webp" alt="">
         <h3>Front-end</h3>
      </div>

      <div class="box">
      <img src="./assets/img/background/home/backendhome.webp" alt="">
         <h3>Back-end</h3>
      </div>

      <div class="box">
      <img src="./assets/img/background/home/protocols.webp" alt="">
         <h3>Protocols</h3>
      </div>

      <div class="box">
         <img src="./assets/img/background/home/apihome.webp" alt="">
         <h3>API </h3>
      </div>

      <div class="box">
      <img src="./assets/img/background/home/dataformat.webp" alt="">
         <h3>Data formats </h3>
      </div>



   </div>
</section>


<!-- ***************************SERVICES SECTION****************************** -->


<section class="capabilities" style='padding-left:0; padding-right:0 '>

   <div class="container-fluid">

      <div class="row">

         <div class="col-md-5 cabtab-wrap">

            <h2 class="tab-title">Services</h2>
            <nav>
               <ul class="nav nav-tabs" id="pills-tab" role="tablist" style="display:block">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link ftab0 active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true"><span>Hire Remote Developer</span></a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link ftab0" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="true"><span>Software Development</span></a>

                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link ftab0 " id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="true"><span>Data Entry and Admin</span></a>
                  </li>
               </ul>
            </nav>

         </div>

         <div class="col-md-7 align-self-center tbcontent-wrap">
            <div class="tab-content" id="pills-tabContent">

               <div class="tab-pane fade fcontent0 active show" id="pills-home" role="tabpanel"
                  aria-labelledby="pills-home-tab">
                  <div class="overlay">
                     <h3 class="main-head">HIRE DEDICATED DEVELOPER MODEL</h3>
                     <p>Hiring remote developers enables firms to quickly scale up with relatively little risk and
                        overhead costs. You can alleviate skill gaps by hiring specialists with a direct knowledge in
                        technology that offers using remote developers.</p>
                     <p>The duties of a normal software developer are carried out by a remote software developer as
                        well. The only prominent difference is that remote software developers are separated from the
                        rest of their team by distance. The creation of new native or hybrid mobile apps, signify web
                        development, theme customization/development, plugin/extension development, and web or mobile
                        app development are all jobs that a highly motivated team of developers can handle.</p>
                     <div class="about-btn">
                        <a href="services" class="learn-btn">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade fcontent0" id="pills-profile" role="tabpanel"
                  aria-labelledby="pills-profile-tab">
                  <div class="overlay">
                     <h3 class="main-head">SOFTWARE DEVELOPMENT</h3>


                     <p>The method programmers use to create software applications is called software development.
                        The procedure, commonly referred to as the Software Development Life Cycle (SDLC), consists
                        of a number of stages that offer a way to create products that adhere to both technical
                        requirements and user requirements.</p>
                     <p>Software developers can use the SDLC as a global standard while creating and enhancing their
                        software applications. It provides a clear framework that development teams may adhere to
                        when designing, producing, and maintaining high-quality software. The goal of the process for
                        creating IT software is to create useful solutions within a set spending limit and deployment
                        timeline.</p>

                     <div class="about-btn">
                        <a href="services" class="learn-btn">Learn More</a>
                     </div>
                  </div>
               </div>

               <div class="tab-pane fade fcontent1" id="pills-contact" role="tabpanel"
                  aria-labelledby="pills-contact-tab">
                  <div class="overlay">
                     <h3 class="main-head">DATA ENTRY AND ADMIN</h3>

                     <p>Data entry jobs entail entering data into the organization's computer system for processing
                        and administration from numerous sources. A candidate for a job in data entry will need to
                        effectively manage a vast volume of data, most of it confidential or sensitive. The data that
                        a firm generates determines its integrity, which supports the significance of the data entry
                        role.

                        Any data entered by the data entry team will subsequently be used by others for reports or as
                        a source of reference.</p>
                     <p>The primary destination will typically be listed in a job description for data entry:
                        Document preparation and sorting for data entry the process of entering data into database
                        software and confirming that it is accurate resolving informational inconsistencies and
                        gathering additional data for deficient documents creating data backups as part of a backup
                        strategy supplying information in response to requests from recognised “testing software
                        updates and new database systems.</p>

                     <div class="about-btn">
                        <a href="services" class="learn-btn">Learn More</a>
                     </div>
                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>



<!-- ***************************Clients SECTION****************************** -->
<section class="home-packages">
   <div class="home-about">
      <div class="image">

         <h2 class="main-head">Our Clients</h2>
         <p style='font-style:italic'>We are honoured to collaborate on some outstanding projects with amazing people.
         </p>

      </div>

      <div class=" content">
         <div class="row partners">


            <div class="col-md-4 text-center">

               <img src="./assets/img/clients/honeywell.png" alt="honeywell" title='Honeywell'>

            </div>


            <div class="col-md-4 text-center">

               <img class='styleimg' src="./assets/img/clients/oil.svg" alt="Indian-Oil-Logo" title='Indian-Oil-Logo'>

            </div>


            <div class="col-md-4 text-center">

               <img src="./assets/img/clients/ingenero.png" alt="ingenero" title='ingenero'>

            </div>


            <div class="col-md-4 text-center">

               <img class='styleimg' src="./assets/img/clients/p66.svg" alt="P66" title='P66'>

            </div>
            <div class="col-md-4 text-center">

               <img src="./assets/img/clients/simenes.svg" alt="Siemens  " title='Siemens'>

            </div>


            <div class="col-md-4 text-center">

               <img src="./assets/img/clients/sabic.svg" alt="SABIC" title='SABIC'>

            </div>


            <div class="col-md-4 text-center">

               <img src="./assets/img/clients/westlake_logo.jpg" alt="westlake" title='westlake'
                  style='margin-bottom:0'>

            </div>


         </div>
      </div>
   </div>
</section>


<!-- ***************************inquiry SECTION****************************** -->

<?php
include './Components/contact.html'
?>

<script>
$('.counter').counterUp({
   delay:10,
   time:1000
})
</script>