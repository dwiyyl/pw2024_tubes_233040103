<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- header section start -->
    <?php
    require '../user/navbar_user.php';
    ?>

    <div class="heading" style="background:url(../images/backgabout.jpg) no-repeat">
        <h1>about us</h1>
    </div>
    
    <!-- about section starts -->
    <section class="about">

    <div class="image">
        <img src="../images/aboutpict.jpg" width="400" height="400" alt="">
    </div>

    <div class="content">
        <h3>why chose us?</h3>
        <p>At Explore Destinations, we are dedicated to providing the ultimate travel experience across Indonesia's most breathtaking locations. Our platform allows you to explore and book your dream vacations with ease and convenience. We pride ourselves on offering personalized travel packages that cater to your preferences and needs</p>
        <div class="icons-container">
            <div class="icons" >
                <a href="../user/package.php"><i class="fas fa-map"></i></a> 
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>

    </section>
    <!-- about section ends -->

    <!-- footer section starts -->
    <?php
    include '../user/footer.php';
    ?>
  
    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="../js/script.js"></script>
</body>
</html>