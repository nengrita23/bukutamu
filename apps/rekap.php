<?php
include "boot.php";
include "koneksi.php";
?>
<div class="row" id="printDiv">
  <div class="col-md-12">
    <div class="card shadow mb-4 mt-3">
      <div class="card-header">
      <h6 class="">Guest Recap[<?= date('d-m-Y')?>]</h6>
      </div>
<div class="card-body">
<form method="post" action="" class="text-center">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">
<div class="for-group">
<label>From Date</label>
<input class="form-control" type="date" name="date01" value="<?=isset($_POST['date01'])?$_POST['date01']: date('d-m-Y')?>" required>
</div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>To Date</label>
      <input class="form-control" type="date" name="date02" value="<?=isset($_POST['date02'])?$_POST['date02']: date('d-m-Y')?>" required>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <button class="btn btn-secondary form control mt-3" name="show"><i class="fa fa-search">Show</i></button>
  </div>
  <div class="col-md-2">
    <a href="rekap.php" class="btn btn-secondary form-control mt-3">Back</a>
    <button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-dark"></i></button>
  </div>
  </form>
  <?php
  if (isset($_POST['show']));
  ?>
  <div id="div1">
    <div class="card mt-4">
      <div class="card-header bg-secondary">
        Guest Recap
      </div>
      <div class="card-body">
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
      <th scope= "col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
    @$tampil = $connect->query("select*from guest where waktu between '$_POST[date01]' and '$_POST[date02]' ");
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
  </tbody>
</table>
</div>
</div>
  </div>
  </div>
  </div>
  </div>

  </div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>