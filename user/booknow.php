<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book now</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .inputBox select {
            width: 100%;
            padding: 1.2rem 1.4rem;
            background: var(--light-black);
            color: #ddd;
            border: .1rem solid var(--black);
            outline: none;
            font-size: 15px;
            color: var(--light-black);
            margin-top: 1.5rem;
            appearance: none;
            background: var(--light-white);
        }
    </style>
</head>
<body>
    
    <!-- header start -->
    <?php
    require '../user/navbar_user.php';
    ?>

    <div class="heading" style="background:url(../images/backbook.jpg) no-repeat">
        <h1>book now</h1>
    </div>
    
    <!-- booking section starts -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="../user/book_form.php" method="post" class="book-form">
            
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <!-- <input type="text" placeholder="place you want to visit" name="location" required> -->
                <select name="location" required>
                <option value="" disabled selected>Select a location</option>
                <option value="Bromo Tengger Semeru">Bromo Tengger Semeru</option>
                <option value="Danau Toba">Danau Toba</option>
                <option value="Malioboro">Malioboro</option>
                <option value="Labuan Bajo">Labuan Bajo</option>
                <option value="Raja Ampat">Raja Ampat</option>
                <option value="Candi Borobudur">Candi Borobudur</option>
                <option value="Lempuyang">Lempuyang</option>
                <option value="Ranca Upas">Ranca Upas</option>
                <option value="Waerebo">Waerebo</option>
                <option value="Banda Neira">Banda Neira</option>
                <option value="Nusa Penida">Nusa Penida</option>
                <option value="Karimun Jawa">Karimun Jawa</option>
                </select>
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving" required>
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>
    <!-- booking section ends -->


    <!-- footer section starts -->
    <?php
    include '../user/footer.php';
    ?>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="../js/script.js"></script>
</body>
</html>