

<html>
<head>	
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigTime</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/btlogo.jpg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.map"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></script> -->
 
 

</head>
<style>
  button svg{
    width: 16px;
  fill: white;
  }
  .mybtn {
  display: none;  
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    width: auto;
    border-radius: 50%;
    border: none;
    box-shadow: 0px 4px 33px 0px rgb(0 0 86 / 28%);
    outline: none;
    background-color: rgb(0, 32, 75);
    cursor: pointer;
    padding: 15px 20px;
}
</style>

<body>

<div id="header"></div>
<div id="home"></div>
<div id="footer"></div>
<div id="inquiry"> </div>
<div id="modelogin"> </div>
<div id="startaproject"> </div>
<button onclick="topFunction()" id="myBtn" class="mybtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg> </button>

<!-- <div id="showme">hiii</div> -->

<script src="./js/home.js"></script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
