<?php
session_start();
require '../halaman_admin/navbar_admin.php';
// koneksi ke database
require '../fungsi/functions.php';
$book = query("SELECT * FROM tabel_book_form");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>Tabel Booking</title>
</head>
<body>

<h1 class="text-center py-3">Tabel Booking</h1>
<div class=container col-8 mt-1>
    <table class="table table-bordered table-light ">
  <thead>
    <tr class="vertical-align: top">
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Where To</th>
      <th scope="col">How Many</th>
      <th scope="col">Arrivals</th>
      <th scope="col">Leaving</th>
    </tr>
  </thead>

    <?php $i =1; ?>
    <?php foreach( $book as $row) : ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $row['name']; ?></td>
      <td><?= $row['email']; ?></td>
      <td><?= $row['phone']; ?></td>
      <td><?= $row['address']; ?></td>
      <td><?= $row['location']; ?></td>
      <td><?= $row['guests']; ?></td>
      <td><?= $row['arrivals']; ?></td>
      <td><?= $row['leaving']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

  </tbody>
</table>
</div>

<?php 
require '../halaman_admin/footer_admin.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>