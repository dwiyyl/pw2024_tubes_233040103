<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
       .book h2 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <!-- header start -->
    <?php
    require '../user/navbar_user.php';
    ?>

    <div class="heading" style="background:url(../images/backbook.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!--  -->
    <section class="book">
    <div class="container">
        <div class="content">
            <h1 class="heading-title">book your trip!</h1>
            <h2 style="text-align: center";>Your Next Destination Awaits - Book Today!</h2>
                <div class="container" style="display: flex; justify-content:center; margin-bottom:20px;">
                <div class="load-more"><a href="../login_admin/logout.php" class="btn">Registrasi / Login</a></div>
            </div>    
        </div>
    </div>
</section>


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