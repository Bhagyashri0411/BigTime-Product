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

    <!-- booking section starts  -->
    <section class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="contact-card">
                <i class="bx bxs-phone"></i>
                <div class="content">
                    <h3>Call Us</h3>
                    <p><a href="tel:+918766579139">+91 8766579139</a></p>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-4 offset-lg-0 offset-md-0 offset-sm-3">
            <div class="contact-card">
                <i class="bx bx-envelope"></i>
                <div class="content">
                    <h3>Email</h3>
                    <p><a href="mailto:info@bigtime.co.in">
                            info@bigtime.co.in</a>
                    </p>


                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="contact-card">
                <i class="bx bx-map"></i>
                <div class="content">
                    <h3>Address</h3>
                    <p>
               CDRN- 1A,Bhusawal, Maharashtra- India 425201
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>
    <section class="booking">

        <div class="contact-section pb-10">
            <?php
     include './Components/contact.html';
    
     ?>
        </div>
       
        </div>
    </section>

    <?php
     include './Pages/client.php';
include './jsfileconnection/js.html';
include './Components/footer.html'
?>
</body>

</html>