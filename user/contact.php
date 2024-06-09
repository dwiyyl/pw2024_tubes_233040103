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
    <p>We'd love to hear from you! Reach out to us with any questions or comments.</p>
    <div class="contact-content">
        <div class="contact-map">
            <!-- Tambahkan peta di sini -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.201034972413!2d107.59067007403473!3d-6.86649666717979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1717485151532!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Your Name" autofocus required />
                <input type="email" placeholder="Your Email" required />
                <textarea name="" id="" cols="35" rows="10" placeholder="Message" required></textarea>
                <input type="submit" value="Send Message" class="submit" />
            </form>
        </div>
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