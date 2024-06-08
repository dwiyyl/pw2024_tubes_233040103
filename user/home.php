<!-- <?php
session_start();
if( isset($_POST["cari"]) ) {
    $destinasi = cari($_POST["keyword"]);
}
?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbaruser.css">
</head>
<body>
    
    <!-- header section start -->
    <section class="header">
        <a href="../user/home.php" class="logo">Ex<span>PLORE</span></a>

        <nav class="navbar">
            <div class="nav-item">
            <form action="" method="post">
                <input type="search" id="query" name="keyword" size="40" autofocus placeholder="enter search keywords..." aria-label="Search through site content">
                <button type="submit" name="cari">Search</button>
            </form>
            </div>
            <a href="../user/home.php">home</a>
            <a href="../user/about.php">about</a>
            <a href="../user/package.php">package</a>
            <a href="../user/book.php">book</a>

            <div class="dropdown">
            <a href="#" class="dropbtn"><i class="fa fa-user" style="color: black;"></i><i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="../login_admin/logout.php">Login</a>
                <a href="../login_admin/register.php">Register</a>
            </div>
            </div>
        </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(../images/home-slide1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="../user/package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(../images/home-slide2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="../user/package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(../images/home-slide3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your worthwhile</h3>
                        <a href="../user/package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- home section end -->


    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="../images/iconservices.png" width="150" height="150"alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="../images/iconservices.png" width="150" height="150" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="../images/iconservices.png" width="150" height="150" alt="">
                <h3>Transportation</h3>
            </div>
            <div class="box">
                <img src="../images/iconservices.png" width="150" height="150"alt="">
                <h3>Food</h3>
            </div>
            <div class="box">
                <img src="../images/iconservices.png" width="150" height="150" alt="">
                <h3>Hotel</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->
    

    <!-- home about section starts -->
    <section class="home-about">

    <div class="image">
        <img src="../images/aboutpict.jpg" width="400" height="400" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to Explore Destinations, the leading platform for exploring and booking your travels to the best tourist destinations worldwide. We are here to inspire you in planning unforgettable holiday adventures and provide you with an easy and convenient booking experience.</p>
        <a href="../user/about.php" class="btn">read more</a>
    </div>
    </section>
    <!-- home about section ends -->

    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <h2>destinations in indonesia</h2>
        <div class="load-more"><a href="../user/package.php" class="btn">View Destinations</a></div>
    </section>
    <!-- ends -->

    <!-- home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 25% off</h3>
            <p>Save more on your adventures! Get up to 25% off for unforgettable holiday experiences. Don't miss this opportunity to plan your dream trip at a more affordable price.</p>
            <a href="../user/book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->


    <!-- contact us section start -->
    <section class="contact" id="contact">
        <h1 class="heading-title">Contact Us!</h1>

      <div class="contact-form">
        <form action="">
          <input type="name" placeholder="Your Name" required />
          <input type="email" placeholder="Your Email" required />
          <textarea name="" id="" cols="35" rows="10" placeholder="Message" required></textarea>
          <input type="submit" value="Send Message" class="submit" required />
        </form>
      </div>
    </section>

    <!-- contact us section ends -->

    
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