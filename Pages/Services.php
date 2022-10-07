<h1>Why choose us for investment?</h1>
<ul>
   <li>There are risks hidden within the financial plan. As a financial advisor, we will let you be aware of the hidden charges while investing your capital.</li>
   <li>Sometimes financial targets are not well defined.Most investors start out by attempting to navigate financial waters on a small boat that they can operate and dock themselves. However, as the investor advances in their career and family.....</li>
   <a href="./invest.php" class="btn">learn more</a>
</ul>
<div class="box-container">

         <?php
            $json = file_get_contents('./Pages/investdata.json');
               $dataget = json_decode($json);

               foreach($dataget as $sow){   
                  echo  "<div class=box>";
                           echo   " <div class=image>";
                              echo   "<a href='./contact.php'><img src=$sow->image alt=$sow->name></a>";
                           echo  "</div>";

                           echo  "<div class='content'>";
                              echo "<h3>$sow->name</h3>";
                              echo "<p>$sow->dis</p>";
                              // echo "<a href=$sow->link class=btn>learn more</a>";
                           echo  "</div>";
                     
                  echo  "</div>";
                }

                ?>
      </div>
</div>
<div class="service-area-two pt-40 ">
         <h1>Why Choose Us for Loans ?</h1>
         <ul>
            <li>Personal loan borrowers face high interest rates. As a solution partner, we provide you with the best loan options.</li>
            <li>As a financial professional, we suggest you do it the proper way for loan processing. Most of the time, borrowers face rejection in the initial stages.It is true that the majority of loan applications fail the first hurdle! They are rejected based.....</li>
            <a href="./loan.php" class="btn">learn more</a>
         </ul>
</div>
<div class="box-container">
         <?php
            $json = file_get_contents('./Pages/loandata.json');
               $dataget = json_decode($json);

               foreach($dataget as $sow){   
                  echo  "<div class=box>";
                           echo   " <div class=image>";
                              echo   "<a href='./contact.php'><img src=$sow->image alt=$sow->name></a>";
                           echo  "</div>";

                           echo  "<div class='content'>";
                              echo "<h3>$sow->name</h3>";
                              echo "<p>$sow->dis</p>";
                              // echo "<a href=$sow->link class=btn>learn more</a>";
                           echo  "</div>";
                     
                  echo  "</div>";
                }

                ?>
      </div>
</div>
<!-- <section class="home-packages">
<div class="service-area-two pt-40 pb-70">
<div class="section-title text-center">
      <span>Our Services</span>
      <h2>Our Best Consulting Services Make You To Reach Your Goal</h2>
   </div>
   <div class="container-fluid">
         <div class="row pt-45 pb-20"> 
         <div class="grid-container-images">
            <?php
               // $jsonfile = file_get_contents('./Pages/images.json');
               // $dataget = json_decode($jsonfile);
               //  foreach($dataget as $sow){
               //    echo "<div class=item-grid>";
              
               //    echo   "<div><a href=><img src=$sow->image alt=$sow->image></a></div>";
               //    echo  "</div>";
               //  }
            ?>
               </div>
         </div>
   </div>
</div>
               </section> -->