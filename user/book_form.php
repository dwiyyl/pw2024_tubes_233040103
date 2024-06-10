<?php

    $connection = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040103');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
     
        $request = " INSERT INTO tabel_book_form(name, email, phone, address, location, guests, arrivals, leaving, user_iduser)
        values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '0') ";

        mysqli_query($connection, $request);
        echo "<script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../user/book.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Data gagal berhasil ditambahkan!');
                  </script>";
    }
?>