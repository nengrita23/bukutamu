<?php
include "boot.php";
include "koneksi.php";
$search = $_GET['cari'];
$result = $connect->query("SELECT*FROM guest WHERE nama_lengkap LIKE '%$search%'");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No Telp</th>
      <th scope="col">Tujuan Kunjungan</th>
      <th scope= "col">Tanggal/Waktu</th>
      <th scope= "col">Pesan</th>
      <th scope= "col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    while ($s = $result->fetch_array()) {
        
        @$no++;
    
    ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><?= $s['nama_lengkap'] ?></td>
      <td><?= $s['email'] ?></td>
      <td><?= $s['no_telp'] ?></td>
      <td><?= $s['tujuan'] ?></td>
      <td><?= $s['waktu'] ?></td>
      <td><?= $s['pesan'] ?></td>

      <td>
      <button class="btn btn-outline-danger" onclick="document.location.href='delete.php?id=<?= $s['no']?>'"><i class="bi bi-trash3"></i></button>
        <button class="btn btn-outline-info" onclick="document.location.href='update.php?id=<?= $s['no']?>'"><i class="bi bi-pencil-square"></i></button>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

