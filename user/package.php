<?php
session_start();

// koneksi ke database
require '../fungsi/functions.php';
$destinasi = query("SELECT * FROM tabel_destinasi");

if( isset($_POST['cari']) ) {
    $destinasi = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
    a{
    text-decoration: none;
    }
    .card .image {
    overflow: hidden;
    }
    .card .image img {
    transition: transform 0.5s ease;
    }
    .card .image:hover img {
    transform: scale(1.1);
    }
    </style>
</head>
<body>
    
    <!-- header section start -->
   <?php
   require '../user/navbar_user.php';
   ?>

    <div class="heading" style="background:url(../images/backgpackage.jpg) no-repeat">
        <h1>packages</h1>
    </div>
    <br>


    <!-- top destinations starts -->
    <h1 class="heading-title mt-5">Top destinations in indonesia</h1>
    <div class="container pt-4">
        <div class="row">
            <?php foreach( $destinasi as $row) : ?>
                <!-- <div class="col pt-3 pb-4"> -->
                    <div class="col-md-3 col-sm-6 px-3 pt-3 pb-4 mb-4">
                    <div class="card">
                        <div class="image">
                            <img src="../images/<?= $row["image"]; ?>" class="card-img-top" style="height: 220px; object-fit: cover alt="">
                        </div>
                        <div class="card-body text-center">
                            <h2 class="card-title"><?= $row["nama_destinasi"]; ?> </h2>
                            <p class="card-text"><?= $row["lokasi"]; ?></p>
                            <a href="../user/detail_destinasi.php?id= <?= $row["id"]; ?> " class="btn">read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>


    <!-- footer section starts -->
    <?php
    include '../user/footer.php';
    ?>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="../js/script.js"></script>
    <script src="../js/scriptpackage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>