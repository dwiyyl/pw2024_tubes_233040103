<?php
session_start();

// koneksi ke database
require '../fungsi/functions.php';
$destinasi = query("SELECT * FROM tabel_destinasi");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $destinasi= query(
        "SELECT * FROM tabel_destinasi
    WHERE id ='$id'"
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

<section class="detail_destinasi py-5">
    <div class="container">
        <?php foreach($destinasi as $row) : ?>
            <div class="text-start mt-2 mb-2">
                <a href="../user/package.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Back</a>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="card-title"><?= $row["nama_destinasi"]; ?></h1>
                            <div class="image mb-3">
                                <img src="../images/<?= $row["image"]; ?>" class="img-fluid" alt="<?= $row["nama_destinasi"]; ?>">
                            </div>
                            <div class="lokasi mb-3">
                                <h6>terletak di <?= $row["lokasi"]; ?></a></h6>
                            </div>
                            <div class="harga mb-3">
                                <h6>Harga?</h6>
                                <p><?php
                                    $text = $row["harga"];
                                    echo nl2br($text);
                                ?></p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mt-5">
                            <h6>Deskripsi</h6>
                            <div class="deskripsi mb-2">
                                <p><?php
                                    $text = $row["deskripsi"];
                                    echo nl2br($text);
                                ?></p>
                            </div>
                            <div class="makanan mb-2">
                                <h6>Makanan rekomendasi di <?= $row["nama_destinasi"]; ?></h6>
                                <p><?php
                                    $text = $row["nama_makanan"];
                                    echo nl2br($text);
                                ?></p>
                            </div>
                            <div class="hotel mb-2">
                                <h6>Hotel terdekat di <?= $row["nama_destinasi"]; ?></h6>
                                <p><?php
                                    $text = $row["nama_hotel"];
                                    echo nl2br($text);
                                ?></p>
                            </div>
                            <div class="transportasi mb-2">
                                <h6>Transportasi yang dapat diakses</h6>
                                <p><?php
                                    $text = $row["nama_transportasi"];
                                    echo nl2br($text);
                                ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <a href="../user/book.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
require '../halaman_admin/footer_admin.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
