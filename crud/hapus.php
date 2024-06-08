<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: ../login_admin/login.php");
    exit;
}

require '../fungsi/functions.php';

//jika tidak ada id di url
if( !isset($_GET['id']) ){
    header("Location: ../halaman_admin/index.php");
    exit;
}

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = '../halaman_admin/index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = '../halaman_admin/index.php';
    </script>
    ";
}

?>