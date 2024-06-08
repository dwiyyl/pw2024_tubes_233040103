<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            color: white;
            background: url(../images/login.jpg); 
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: #155ea1;
            width: 55%;
            height: 70%;
            font-size: 1.3rem;
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
        }
        button {
            font-size: 1rem;
            background-color: lightblue;
            border-radius: 10px;
            padding: 5px;
            border: 1.5px solid black;
            width: 100px;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(../images/logoadmin.png);
            background-size: cover;
            background-position: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>            
            <h2>Selamat datang 
                <?php if($_SESSION['role'] == 'admin'){
                    echo "Admin";
            } else{
                echo "User";
            } ?> </h2>        
            <button><a href="../halaman_admin/index.php">Home</a></button>
        </div>
    </div>
</body>
</html>