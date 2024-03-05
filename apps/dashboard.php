<?php
include "koneksi.php";
include "boot.php";
$date = date('Y-m-d');

?>
<div class="row">
  <div class="col col-3">
    <div class="card ms-3 mt-3" style="width: 300px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/sun.png" class="img-fluid rounded-start ms-3 mt-3 mb-3" alt="..." width="70">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-center">Today</h5>
            <?php
            $lihat = $connect->query("select waktu from guest where waktu like'%$date%'");
            $jumlah = $lihat->num_rows;
            echo $jumlah;
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php
    $month = date('m');

    ?>
    <div class="card ms-3 mt-4" style="width: 300px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/month.png" class="img-fluid rounded-start ms-3 mt-3 mb-3" alt="..." width="70">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-center">This Month</h5>
            <?php
            $see = $connect->query("select waktu from guest where waktu like'%$month%'");
            $plus = $see->num_rows;
            echo $plus;
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php
    $years = date('Y');

    ?>
    <div class="card ms-3 mt-4" style="width: 300px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/calendar.png" class="img-fluid rounded-start ms-3 mt-3 mb-3" alt="..." width="70">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-center">This Years</h5>
            <?php
            $look = $connect->query("select waktu from guest where waktu like'%$years%'");
            $add = $look->num_rows;
            echo $add;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="col ms-3 mt-3">
      <div class="container ">
        <table class="table table-striped table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">No Telp</th>
              <th scope="col">Tujuan Kunjungan</th>
              <th scope="col">Tanggal/Waktu</th>
              <th scope="col">Pesan</th>
              <th scope="col">Gender</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tampil = $connect->query("select*from guest");
            while ($s = $tampil->fetch_array()) {

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
                <td><?= $s['gender'] ?></td>
              </tr>
            <?php
            }
            ?>
        </table>
      </div>
    </div>
  </div>
</div>
</tbody>