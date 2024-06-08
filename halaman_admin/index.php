<?php
require '../halaman_admin/navbar_admin.php';

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: ../login_admin/login.php");
    exit;
}

// koneksi ke database
require '../fungsi/functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 1;
$jumlahData = count(query("SELECT * FROM tabel_destinasi"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$destinasi = query("SELECT * FROM tabel_destinasi LIMIT $awalData, $jumlahDataPerHalaman");
// $destinasi = query("SELECT image FROM tabel_destinasi LIMIT 7");


// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $destinasi = cari($_POST["keyword"]);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>Halaman Admin</title>
</head>
<body>
    
    </section>
    
    <h1 class="text-center py-3">Destinations in Indonesia</h1>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombol-cari"> Cari! </button>
        </form>
        <br>
        <div id="container">
    </div>

    <!-- navigasi start -->
    <div class="container">
    <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <?php if ($halamanAktif > 1) : ?>
                            <a href="?halaman=<?= $halamanAktif - 1 ?> " class="page-link"><span aria-hidden="true">&laquo;</span></a>
                        <?php endif ?>
                    </li>
                    <li class="page-item d-flex"><?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                            <?php if ($i == $halamanAktif) : ?>
                                <a href="?halaman=<?= $i; ?>" class="page-link" style="baground-color: blue; color: black;"><?= $i; ?></a>
                            <?php else : ?>
                                <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </li>

                    <li class="page-item">
                        <?php if ($halamanAktif < $jumlahHalaman) : ?>
                            <a href="?halaman=<?= $halamanAktif + 1 ?>" class="page-link"><span aria-hidden="true">&raquo;</span></a>
                        <?php endif ?>
                    </li>
                </ul>
            </nav>
    </div>
    <!-- navigasi ends -->

    <br>

    <div class=container col-8 mt-1>
    <table class="table table-bordered table-light ">
  <thead>
    <tr class="vertical-align: top">
      <th class="vertical-align" top scope="col">No.</th>
      <th scope="col">Image</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Nama Hotel</th>
      <th scope="col">Nama Transportasi</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

    <?php $i =1; ?>
    <?php foreach( $destinasi as $row) : ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><img src="../images/<?= $row["image"]; ?>" width="150" alt=""></td>
      <td><?= $row["nama_destinasi"]; ?></td>
      <td><?= $row["lokasi"]; ?></td>
      <td><?= $row["deskripsi"]; ?></td>
      <td><?= $row["nama_makanan"]; ?></td>
      <td><?= $row["nama_hotel"]; ?></td>
      <td><?= $row["nama_transportasi"]; ?></td>
      <td><?= $row["harga"]; ?></td>
      <td>
        <div class="container mt-1">
        <a class="btn btn-primary" style="text-decoration:none" href="../crud/ubah.php?id=<?= $row["id"]; ?>">ubah</a>
        <a class="btn btn-danger mt-2" href="../crud/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"> hapus</a>
        </div>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

  </tbody>
</table>
</div>

<!-- footer -->
<?php
require '../halaman_admin/footer_admin.php';
?>

    <script src="../js/scriptadmin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>