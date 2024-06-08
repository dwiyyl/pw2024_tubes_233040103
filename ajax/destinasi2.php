<?php
require '../fungsi/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tabel_destinasi
            WHERE
            nama_destinasi LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            lokasi LIKE '%$keyword%' OR
            nama_makanan LIKE '%$keyword%' OR
            nama_hotel LIKE '%$keyword%' OR
            nama_transportasi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
$destinasi = query($query);

//var_dump($destinasi);
?>

<h1 class="heading-title">top destinations</h1>
    <div class="container pt-5">
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