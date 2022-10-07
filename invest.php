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
echo " <div class=heading style='background:url(images/header-bg-1.png) no-repeat'>";
echo   "<div class='inner-banner'>";
   // echo"<div class=container>";
   echo "<div class='inner-title text-center'>";
       echo "<h3>Services</h3>";
        echo "<ul>";
           echo "<li>";
               echo "<a href=./index.php>Home</a>";
           echo "</li>";
           echo "<li>";
               echo  "<i class='bx bxs-chevron-right'></i>";
           echo "</li>";
           echo "<li>Services</li>";
           echo "<li>";
               echo  "<i class='bx bxs-chevron-right'></i>";
           echo "</li>";
           echo "<li>Investment</li>";
           echo "<li>";
          
       echo "</ul>";
   echo "</div>";
// echo "</div>";
echo "</div>";
echo "</div>";
    echo "<section class=home-packages>";
    echo   "<div class='service-area-two pb-40'>";
     echo "<div class='section-title text-center'>";
        echo "<h1> Our Services For Investment</h1>";
     echo "</div>";
     echo "<h1>Why choose us for investment?</h1>";

     $json = array("There are risks hidden within the financial plan. As a financial advisor, we will let you be aware of the hidden charges while investing your capital.",
     "Sometimes financial targets are not well defined.Most investors start out by attempting to navigate financial waters on a small boat that they can operate and dock themselves. However, as the investor advances in their career and family, they end up amassing a large amount of wealth that is difficult to manage over a lifetime. It is critical to have specialists on board to ensure that the following precautions are taken: Portfolio efficiency entails paying only the minimum amount of taxes, having assets properly titled, ensuring assets pass to heirs as you wish, and obtaining the best return for the amount of risk you are willing to take",
     "Most of the time, they are not presented with all of the available investment options.Bigtime financial assistance takes pride in offering clients the same investment advice and options that it (as an agency) offers, frequently testing various investments before investing a client's money. Other advisors frequently treat their close family and friends with first-tier investment options, and then clients get the remaining options to pick from on the retail floor, and they aren't always aware of or able to provide the full gamut of options, including investment alternatives.",
     "We offer the latest investment plans.While purchasing a new home, we begin by purchasing furniture that fits our current space, budget, and style, with no idea of what we will require in the long run. Clients who work with an investment broker have an asset allocation that is the result of individual investment decisions made over a number of years rather than an assessment of what is optimal today. Just because an investment was a good idea four years ago does not mean it is still a good idea today. In the investment world, the consumer is frequently confronted with a financial plan that is akin to having furniture that no longer fits");
   
      foreach($json as $data){
      echo "<ul>
        <li> $data</li>
      </ul>";
      }
     
    echo "<div class=box-container>";
    $json = file_get_contents('./Json/invest.json');
    $dataget = json_decode($json);

    foreach($dataget as $sow){   
       echo  "<div class=box>";
                echo   " <div class='image img'>";
                   echo   "<a href=$sow->link><img src=$sow->image alt=$sow->name></a>";
                echo  "</div>";

                echo  "<div class='content'>";
                   echo "<h3>$sow->name</h3>";
                   echo "<p>$sow->dis</p>";
                echo  "</div>";
          
       echo  "</div>";
     }

     echo "</div>";

    echo "</section>";
            echo "<section class='booking'>";
            echo "<div class='pt-20'>";
            include './Components/contact.html';
            echo "</div>";
            echo "</section>";
   
include './jsfileconnection/js.html';
include './Components/footer.html'
?>
    </body>

</html