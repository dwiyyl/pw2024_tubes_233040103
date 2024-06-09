<?php
require '../fungsi/functions.php';

$keyword = $_GET["keyword"];

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
$destinasi = query($query);

// var_dump($destinasi);
?>

<table class="table table-bordered table-light ">
  <thead>
    <tr class="vertical-align: top">
      <th class="vertical-align" top scope="col">No.</th>
      <th scope="col">Image</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Nama Hotel</th>
      <th scope="col">Nama Transportasi</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>

    <?php if (empty($destinasi)) : ?>
      <tr>
        <td colspan="10">
            <p style="color: red; font-style:italic; text-align: center;">data destinations tidak ditemukan!</p>
        </td>
      </tr>
      <?php endif; ?>
  </thead>

    <?php $i =1;
    foreach( $destinasi as $row) : ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><img src="../images/<?= $row["image"]; ?>" width="150" alt=""></td>
      <td><?= $row["nama_destinasi"]; ?></td>
      <td><?= $row["lokasi"]; ?></td>
      <td><?= $row["deskripsi"]; ?></td>
      <td><?= $row["nama_makanan"]; ?></td>
      <td><?= $row["nama_hotel"]; ?></td>
      <td><?= $row["nama_transportasi"]; ?></td>
      <td><?= $row["harga"]; ?></td>
      <td>
        <div class="container mt-1">
        <a class="btn btn-primary" style="text-decoration:none" href="../crud/ubah.php?id=<?= $row["id"]; ?>">ubah</a>
        <a class="btn btn-danger mt-2" href="../crud/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"> hapus</a>
        </div>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

  </tbody>
</table>