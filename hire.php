<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include './jsfileconnection/head.html';
    ?>

</head>
<body>
<?php
    include './Components/header.html';
    ?>   
<!-- <div style='background:url("./assets/img/backhire.svg") no-repeat'> -->
<div class="heading" style="background:url(./assets/img/background/cover.png) no-repeat">
    <div class="inner-banner">
      <div class="mainheading">
        <h2> <strong> HIRE REMOTE DEVELOPER </strong> </h2>
      </div>
      <div class="inner-title text-center">
        <ul>
          <li><a href="home">Home</a></li>
          <li><i class="bx bxs-chevron-right"></i></li>
          <li><a href="services">Services</a> </li>
          <li><i class="bx bxs-chevron-right"></i></li>
          <li>Hire Remote Developer</li>
        </ul>
      </div>
    </div>
  </div>
    <section>
        <div class="container">
            <div class="row  justify-content-between">
                <div class="col-md-5">
                    <div class="section-title-and-desc side-sticky-section mb-md-0">
                    <div class="mainheading">
                            <h2 class="main-head" style='text-align:start'> HIRE REMOTE DEVELOPER</h2>
                            <p style='text-align:justify'><span style='font-size:30px'>H</span>iring remote developers enables firms to quickly scale up with relatively little risk and overhead costs. You can alleviate skill gaps by hiring specialists with a direct knowledge in technology that offers using remote developers.
                            </p>
                            <p style='text-align:justify'>The duties of a normal software developer are carried out by a remote software developer as well. The only prominent difference is that remote software developers are separated from the rest of their team by distance. The creation of new native or hybrid mobile apps, signify web development,theme customization/development,plugin/extension development, and web or mobile app development are all jobs that a highly motivated team of developers can handle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row gy-5">
                        <?php
                        $jsonfile = file_get_contents('./Json/hiredeveloper.json');
                        $data = json_decode($jsonfile);
                        foreach($data as $show){
                            echo "<div class='col-12'>
                            <div class='bg-graylight'>
                              <div>
                                <img src='./assets/img/services/Hire/$show->img' alt='broken'>
                                <h3 class='h2 font-bold mb-sm'><strong>Hire</strong> $show->name</h3>
                              </div>
                                <p>$show->para</p>
                            </div>
                        </div>";
                        }
                        ?>
                    </div>
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