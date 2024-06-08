<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: ../halaman_admin/index.php");
    exit;
}

require '../fungsi/functions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tabel_user WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {
        
        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            //set seassion
            $_SESSION["login"] = true;
            $_SESSION["role"] = $row['role'];
            
            if ($row['role'] == 'admin'){
            header("location:../halaman_admin/dashboard.php");
            }
            if ($row['role'] == 'user'){
                header("Location: ../user/booknow.php");
            }
            exit;
        }
    }
    $error= true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
            /* background-repeat: no-repeat;
            background-size: cover; */
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
        .register {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 20px;
        }
        .register p {
            color: black;
            text-decoration: none;
            font-weight: 600;
        }
        .register  a {
            color: blue;
            text-decoration: none;
            font-weight: 600;
            font-style: italic;
        }
        .register p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        
    <h1 >Halaman Login</h1>
    <img src="../images/logoadmin.png" alt="">

    <?php if( isset($error) ) : ?>
        <p style="color : red; font-style: italic"> username / password salah! </p>
    <?php endif; ?>

    <form action="" method="post">
        
            
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" autofocus placeholder>
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password autofocus placeholder">
                <br>
                <button type="submit" name="login">Login</button>
                <br>
                <div class="register">
                    <p>Don't have an account? <a href="../login_admin/register.php">Register</a></p>
                </div>
    </form>
    
    </div>
    </div>
</body>
</html>