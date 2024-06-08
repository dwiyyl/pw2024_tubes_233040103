<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

    <div class="heading" style="background:url(../images/backcontact.jpg) no-repeat">
        <h1>contact</h1>
    </div>

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

    <!-- footer section starts -->
    <?php
    require '../user/footer.php';
    ?>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="../js/script.js"></script>
</body>
</html>