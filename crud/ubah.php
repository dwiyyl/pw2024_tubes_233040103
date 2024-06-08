<?php
require'../halaman_admin/navbar_admin.php';
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: ../login_admin/login.php");
    exit;
}

require '../fungsi/functions.php';
// koneksi ke DBMS
// $conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040103");

//jika tidak ada id di url
if( !isset($_GET['id']) ){
    header("Location: ../halaman_admin/index.php");
    exit;
}
 //ambil data di URL
 $id = $_GET["id"];

 //query data destinasi berdasarkan id
$dts = query("SELECT * FROM tabel_destinasi WHERE id = $id")[0];
// var_dump($dts["nama_destinasi"]);

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
// //ambil data dari tiap elemen dalam form
// $nama_destinasi = $_POST["nama_destinasi"];
// $deskripsi = $_POST["deskripsi"];
// $lokasi = $_POST["lokasi"];
// $image = $_POST["image"];
// $nama_makanan = $_POST["nama_makanan"];
// $nama_hotel = $_POST["nama_hotel"];
// $nama_transportasi = $_POST["nama_transportasi"];
// $harga = $_POST["harga"];

//query insert data
// $query = "INSERT INTO tabel_destinasi
//             VALUES
//             ('0', '$nama_destinasi', '$deskripsi', '$lokasi', '$image', '$nama_makanan', '$nama_hotel', '$nama_transportasi', '$harga', '0')
//             ";
//             mysqli_query($conn, $query);
        //cek apakah data berhasil diubah atau tidak
        
        if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = '../halaman_admin/index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = '../halaman_admin/index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>Ubah data Destinasi</title>
</head>
<body>
    
<div class="container col-7">
        <h1 class="text-center mb-3">Ubah Data Destinasi</h1>

        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $dts["id"]; ?>">
        <input type="hidden" name="imageLama" value="<?= $dts["image"]; ?>">
            <div class="mb-2">
                <label for="nama_destinasi" class="form-label">Nama Destinasi :</label>
                <textarea class="form-control" name="nama_destinasi" id="nama_destinasi" required><?= $dts["nama_destinasi"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" required><?= $dts["deskripsi"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="lokasi" class="form-label">Lokasi :</label>
                <textarea class="form-control" name="lokasi" id="lokasi" required><?= $dts["lokasi"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="nama_makanan" class="form-label">Nama Makanan :</label>
                <textarea class="form-control" name="nama_makanan" id="nama_makanan" required><?= $dts["nama_makanan"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="nama_hotel" class="form-label">Nama Hotel :</label>
                <textarea class="form-control" name="nama_hotel" id="nama_hotel" required><?= $dts["nama_hotel"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="nama_transportasi" class="form-label">Nama Transportasi :</label>
                <textarea class="form-control" name="nama_transportasi" id="nama_transportasi" require><?= $dts["nama_transportasi"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="harga" class="form-label">Harga :</label>
                <textarea class="form-control" name="harga" id="harga" required><?= $dts["harga"]; ?></textarea>
            </div>
            <div class="mb-2">
                <label for="image" class="form-label">image :</label>
                <img src="../images/<?= $dts['image']; ?>" width="40"> <br>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="mb-2">
                <button type="submit" class="form-control btn btn-secondary" name="submit">Ubah Data!</button>
            </div>
            <div class="mb-2">
            <a href="../halaman_admin/index.php" style="text-decoration: none;" class="btn btn-primary">Kembali</a>
            </div>

        </form>
    </div>

    <!-- footer -->
    <?php
    require '../halaman_admin/footer_admin.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>