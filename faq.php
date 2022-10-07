<!DOCTYPE html>
<html lang="en">

<head>
   <?php
    include './jsfileconnection/head.html';
    ?>
    <style>
      
    </style>
</head>

<body>
   <?php
    include './Components/header.html';
    ?>

<section class="home-packages">

<div class="service-area-two pt-40 pb-70" style="background-color:white">
<div class="container">
      <h2>Frequently Asked Questions</h2>
      <div class="accordion">
         <?php
            $jsonfile = file_get_contents('./Json/faq.json');
            $data = json_decode($jsonfile);
            foreach($data as $show){
               echo "<div class=accordion-item>";
                  echo "<button id=accordion-button-$show->number aria-expanded=false>";
                     echo "<span class=accordion-title>$show->question</span>";
                     echo "<span class=icon aria-hidden=true></span>";
                  echo "</button>";
                  echo "<div class=accordion-content><p>$show->ans</p> <a href='' class=btn>learn more</a></div>";
               echo "</div>";
            }
         ?>
      </div>
    </div>
</div>
</section>
<div class="model">

</div>

  
   <?php  
include './jsfileconnection/js.html';
include './Components/footer.html'
?>
<script>
   const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));


</script>
</body>

</html>