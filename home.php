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
  
echo  "<div class=leader-area>";
  echo "<div class=container>";
    echo   "<div class=leader-content>";
      echo  " <div class='section-title text-center'>";
        echo  "<h2>If money is the problem, make us the solution.</h2>";           
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";

echo "<section class=home-packages>";
echo "<h2>Introduction</h2>";
echo "<p>We offer various forms of Loans, to overcome your problems and become independently free from financial support. We have an extensive & flexible loan facility for your needs.</p>";
echo "<h2>We provide you with each type of loan support ! </h2>";

echo "</section>";
echo "<section style='padding-top:2rem'>";

echo "<div class='service-area-two'>";
  echo "<div class='row'>";   
     echo "<div class=grid-container>";
     echo "<div class=item-grid>";
      
            $json = file_get_contents('./Json/home.json');
               $dataget = json_decode($json);

               foreach($dataget as $sow){   
                  echo  "<div class='row'>";
                  echo  "<div class='col-lg-3 col-md-6'>";
                       echo "<div class=service-item>";
                           echo   " <div class=images>";

                              echo   "<img src=$sow->image alt=$sow->name>";
                              echo   "<a class=service-item-more  >$sow->name</a>";
                         echo  "</div>";
                    echo  "</div>";
                     echo  "</div>";
                   echo  "<div class='col-lg-9 col-md-6'>";
                     echo " <div class=headingline>";
                        echo "<h1>$sow->name</h1>";
                        echo "<p>$sow->para</p>";
                     echo  "</div>";
                     echo "<div class=main-list>";
                     echo "<h3>Introduction</h3>";
                        echo "<ul><li>$sow->dis</li></ul>";
                  
                     echo  "</div>";
                     echo  "</div>";
                     echo  "</div>";
                }

               
                echo "</div>";
   
                echo "</div>";
                echo "</div>";
                echo "</section>";
                ?>
                <section style="background: var(--light-bg);">

        <div class="row">

            <div class="services-details pt-20 pb-20">
            
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="services-details-content">
                                <h2 class="text-center">Some Other type of loan support</h2>

                                <div class="services-item-area">
                                    <div class="row">
                                      <?php
                                         $json = file_get_contents('./Json/other.json');
                                         $dataget = json_decode($json);
                                         foreach($dataget as $sow){
                                          echo "<div class='col-lg-3 col-md-3'>";
                                          echo "<div class=services-details-item>";
                                            echo "<i class='fa $sow->fafa' aria-hidden='true'></i>";
                                            echo "<h3>$sow->head</h3>";
                                            echo "<p>Used to fund home improvement and repair projects.</p>";
                                          echo "</div>";
                                        echo "</div>";
                                         }
                                      
                                      ?>
                                    </div>
                                </div>
                            </div>
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