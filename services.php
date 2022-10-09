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
        <div class="inner-title text-center">
            <h3>Services</h3>
            <ul>
                <li><a href="home">Home</a></li>
                <li><i class="bx bxs-chevron-right"></i></li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="service">
   <div class="mainheading">
      <h2> <strong class="text-[#303841]">
            45+ SOFTWARE </strong> TYPES OF SERVICES WE PROVIDE.</h2>
      <p style='margin-bottom:30px'>
         We offer extensive domain understanding and a thorough knowledge of the context in which software operates
         in addition to our in-depth <br>
         understanding of software architecture and coding standards. For the abovementioned use cases, we create
         SaaS products <br>
         as well as web, mobile, desktop, and cloud applications.</p>
   </div>

   <div class="services-about">
         <div class="content">
             <img src="./assets/img/services/Industrial.jpg" alt="">
         </div>
         <div class="image">
                    <div class="services-details-item" style='    margin-bottom: 1%;'>
                        <h3> Industrial software </h3>
                        <ul>
                           <li> 1) Human Machine Interface(HMI)</li>
                           <li> 2) Computerized maintenance management</li>
                           <li> 3) Equipment management, equipment monitoring.</li>
                           <li>4) Quality management</li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-ml-4">
                            <div class="content">
                                <img src="./assets/img/services/Enterprise.jpg" alt="">
                            </div>  
                        </div>
                        <div class="col-lg-4 col-md-4 col-ml-4">    
                            <div class="content">
                            <img src="./assets/img/services/connection.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-ml-4">    
                            <div class="content">
                            <img src="./assets/img/services/knowledge.jpg" alt="">

                            </div>
                        </div>
                    </div>

                    <div class="services-details-item" style='margin-top: 1%;'>
                        <h3> Knowledge and productivity </h3>
                        <ul>
                           <li> 1) Knowledge management</li>
                           <li> 2) Digital workplace</li>
                           <li>3) eLearning</li>
                           <li>4) Employee monitoring</li>
                           <li> 5) Project management</li>
                        </ul>
                    </div>

 
         </div>
      </div>
</section>
<section>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link nlink active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="true">SERVICES</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link nlink" id="project-tab" data-bs-toggle="tab" data-bs-target="#project" type="button" role="tab" aria-controls="project" aria-selected="false">PROJECTS</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link nlink" id="clients-tab" data-bs-toggle="tab" data-bs-target="#clients" type="button" role="tab" aria-controls="clients" aria-selected="false">CLIENTS</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link nlink" id="data-tab" data-bs-toggle="tab" data-bs-target="#data" type="button" role="tab" aria-controls="data" aria-selected="false">DATA ENTRY</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane tbpane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">
  45+ Software types of services we provide. We offer extensive domain understanding and a thorough knowledge of the context in which software operates in addition to our in-depth understanding of software architecture and coding standards.For the abovementioned use cases, we create SaaS products as well as web, mobile, desktop, and cloud applications.
  </div>
  <div class="tab-pane tbpane fade" id="project" role="tabpanel" aria-labelledby="project-tab">
  Bigtime is dedicated to engineering optimal technological solutions that increase global earnings for international clients. We have a robust team of experienced software programmers in various technological sets ranging from mobility, web development, Blockchain, AI and more.
  </div>
  <div class="tab-pane tbpane fade" id="clients" role="tabpanel" aria-labelledby="clients-tab">
  We have deliver the software services to various refinery companies by instant developers, cutting-edge technology, skilled team, costs efficient/economy, confidential & time zone flexibility.Our team of specialized developers, designers and innovators provides digital solutions based on the client's needs.
  </div>
  <div class="tab-pane tbpane fade" id='data' role='tabpanel' aria-labelledby='data-tab'>
  Hire Data Entry Experts of Bigtime and Get Work Completed on a secure and adaptable Platform, we provide a data entry service with error less, high level of data quality and integrity. We have a skilled data entry specialist for your project that makes sure the information is correct, helpful, and always relevant for any business or project.
  </div>
</div>
</section>
    <!-- booking section starts  -->
        <?php
include './jsfileconnection/js.html';
include './Components/footer.html'
?>
</body>

</html>