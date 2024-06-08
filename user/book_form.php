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
     
        $request = " insert into tabel_book_form(name, email, phone, address, location, guests, arrivals, leaving) values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving') ";

        mysqli_query($connection, $request);

        header('Location: ../user/book.php');
        }else{
            echo 'something went wrong try again';
    }
?>