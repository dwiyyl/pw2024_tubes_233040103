<?php
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040103");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama_destinasi = htmlspecialchars($data["nama_destinasi"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $nama_makanan = htmlspecialchars($data["nama_makanan"]);
    $nama_hotel = htmlspecialchars($data["nama_hotel"]);
    $nama_transportasi = htmlspecialchars($data["nama_transportasi"]);
    $harga = htmlspecialchars($data["harga"]);

    //upload image
    $image = upload();
    if( !$image ) {
        return false;
    }

    $query = "INSERT INTO tabel_destinasi
                VALUES
                ('0', '$nama_destinasi', '$deskripsi', '$lokasi', '$image', '$nama_makanan', '$nama_hotel', '$nama_transportasi', '$harga', '0')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){

    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    //cek apakah tidak ada image yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih image terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah yang diupload adalah image
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan image!');
            </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    // if( $ukuranFile > 1000000 ) {
    //     echo "<script>
    //             alert('ukuran image terlalu besar!');
    //         </script>";
    //     return false;
    // }
    
    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../images/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_destinasi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama_destinasi = $data["nama_destinasi"];
    $deskripsi = $data["deskripsi"];
    $lokasi = $data["lokasi"];
    $nama_makanan = $data["nama_makanan"];
    $nama_hotel = $data["nama_hotel"];
    $nama_transportasi = $data["nama_transportasi"];
    $harga = $data["harga"];
    $imageLama = $data["imageLama"];

    //cek apakah user pilih image baru atau tidak
    if( $_FILES['image']['error'] === 4 ){
        $image = $imageLama;
    } else {
        $image = upload();
    }
    

    $query = "UPDATE tabel_destinasi SET
                nama_destinasi = '$nama_destinasi',
                deskripsi = '$deskripsi',
                lokasi = '$lokasi',
                image = '$image',
                nama_makanan = '$nama_makanan',
                nama_hotel = '$nama_hotel',
                nama_transportasi = '$nama_transportasi',
                harga = '$harga'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
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
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek usernamr sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM tabel_user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO tabel_user VALUES('0', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
    
}

function registrasi2($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek usernamr sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM login_user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO login_user VALUES('0', '$username', '$password')");

    return mysqli_affected_rows($conn);
    
}
?>