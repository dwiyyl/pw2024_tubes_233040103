<?php
require '../fungsi/functions.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan, silakan login!');
                document.location.href = '../login_admin/logout.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: #000;
            background: url(../images/login.jpg); 
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: white;
            width: 55%;
            height: 70%;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
        }
        h1 {
            height: 50px;
            color: #155ea1 ;
        }
        img {
            height: 150px;
            border-radius: 50%;
        }
        input {
            margin-top: 10px;
            border-radius: 20px;
            border: 2px solid black;
            width: 220px;
            height: 25px;
        }
        button {
            margin-top: 15px;
            cursor: pointer;
            font-size: 1rem;
            background-color: lightlilac;
            border-radius: 20px;
            padding: 10px;
            border: 2px solid black;
        }
        .login {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 20px;
        }
        .login p {
            color: black;
            text-decoration: none;
            font-weight: 600;
        }
        .login  a {
            color: blue;
            text-decoration: none;
            font-weight: 600;
            font-style: italic;
        }
        .login p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        
    <h1 >Halaman Registrasi</h1>
    <img src="../images/iconservices.png" alt="">
  

    <form action="" method="post">
       
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder autofocus autocomplete="off" required>
        <br>
            
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder autofocus autocomplete="off" required>
        <br>
          
        <label for="password2">Konfirmasi Password :</label>
        <input type="password" name="password2" id="password2" placeholder autofocus autocomplete="off" required>
        <br>
        <button type="submit" name="register">Register!</button>
        <br>
        <div class="login">
            <p>Have an account? <a href="../login_admin/logout.php">Login</a></p>
        </div>
    </form>
</body>
</html>