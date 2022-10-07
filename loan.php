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
           echo "<li>Loan</li>";
           echo "<li>";
          
       echo "</ul>";
   echo "</div>";
// echo "</div>";
echo "</div>";
echo "</div>";
    echo "<section class=home-packages>";
    echo   "<div class='service-area-two pb-40'>";
     echo "<div class='section-title text-center'>";
        echo "<h1> Our Services For Loans</h1>";
     echo "</div>";
     echo "<h1>Why Choose Us for Loans ?</h1>";

     $json = array("Personal loan borrowers face high interest rates. As a solution partner, we provide you with the best loan options.",
     "Collateral & Securities Issues, It is a well-known fact that personal loans are difficult to obtain. The easily accessible parts remain secured, such as a car loan, a home loan, or something similar. Banks are hesitant to provide us with unsecured personal loans. They may be doing this to reduce risk, but they are also excluding many qualified borrowers from the loan ecosystem, denying them the opportunity to grow. As a financial professional, we recommend that you follow the proper loan processing procedures.",
     "As a financial professional, we suggest you do it the proper way for loan processing. Most of the time, borrowers face rejection in the initial stages.It is true that the majority of loan applications fail the first hurdle! They are rejected based on criteria such as age, income, insufficient bank validations, or even verifiable evidence that does not satisfy the lender's requirements. To a certain limited extent, this can be avoided by carefully reading the eligibility requirements of lending banks and following them precisely in a series of steps.",
     "Problems with credit scores,Banking service pathways are notable for obsessing over credit scores such as CIBIL. Do you have a lower score? Worse, do you have no credit history at all? If you need a quick loan, you're going to have a difficult time. It's a vicious circle: you need a loan to build a credit score. A credit score is also required for a loan.We will provide the best options to overcome your low CIBIL score to get you the loan easily.
.     ");
   
      foreach($json as $data){
      echo "<ul>
        <li> $data</li>
      </ul>";
      }
     
    echo "<div class='box-container box1'>";
    $json = file_get_contents('./Json/loan.json');
    $dataget = json_decode($json);

    foreach($dataget as $sow){   
       echo  "<div class=box>";
                echo   " <div class='image'>";
                   echo   "<a href=$sow->link><img src=$sow->image alt=$sow->name></a>";
                echo  "</div>";

                echo  "<div class='content'>";
                   echo "<h3>$sow->name</h3>";
                   echo "<p>$sow->dis</p>";
                   echo "<a href=$sow->link class=btn>learn more</a>";
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