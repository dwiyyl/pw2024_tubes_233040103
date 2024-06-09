<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar User</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbaruser.css">
</head>
<body>
     <!-- header section start -->
     <section class="header">
  <a href="../user/home.php" class="logo">Ex<span>PLORE</span></a>

  <nav class="navbar">
    <div class="nav-item">
      <form action="" method="post">
        <input type="search" id="query" name="keyword" size="40" autofocus placeholder="enter search keywords..." aria-label="Search through site content" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Search</button>
      </form>
    </div>
    <a href="../user/home.php">home</a>
    <a href="../user/about.php">about</a>
    <a href="../user/package.php">package</a>
    <a href="../user/book.php">book</a>

    <div class="dropdown">
    <a href="#" class="dropbtn"><i class="fa fa-user" style="color: black;"></i><i class="fa fa-caret-down"></i></a>
      <div class="dropdown-content">
        
        <a href="../login_admin/logout.php">Login</a>
        <a href="../login_admin/register.php">Register</a>
      </div>
    </div>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>
</section>
    <!-- header section end -->

     <!-- swiper js link -->
     <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="../js/script.js"></script>
</body>
</html>