<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $connect->query("select * from guest where no='$id'");
$a = $panggil->fetch_array();
if (! isset($_POST['edite'])){
}else{
$update = $connect->query("update guest set nama_lengkap='$_POST[nama_lengkap]', email= '$_POST[email]', no_telp='$_POST[no_telp]', tujuan= '$_POST[tujuan]', pesan='$_POST[pesan]', gender='$_POST[gender]' where no='$id'");
?>
<div class="alert alert-info mt-3 ms-3" role="alert">
<?php
echo "Data changed successfully<a href='tampil.php'> Back</a>";
?>
</div>
<?php
}
?>
<div class="container mt-2">
<form class="form-control mt-3 bg-dark text-light" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" value="<?= $a['nama_lengkap']?>">
    
    <label for="exampleInputEmail1" class="form-label">Email :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $a['email']?>">
    
    <label for="exampleInputEmail1" class="form-label">No Telpon :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp" value="<?= $a['no_telp']?>">

    <label for="exampleInputEmail1" class="form-label">Tujuan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan" value="<?= $a['tujuan']?>">

    <label for="exampleInputEmail1" class="form-label">Pesan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pesan" value="<?= $a['pesan']?>">

    <label for="exampleInputEmail1" class="form-label">Gender :</label>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="man" value="<?=$a['gender']?>"required>
    <label class="form-check-label" for="flexRadioDisabled">Man</label>
    </div>

    <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="woman" value="<?=$a['gender']?>" required>
    <label class="form-check-label" for="flexRadioDisabled">Woman</label>
    </div>

    <div class="text-end">
  <button name="edite" type="submit" class="btn btn-light mt-3">OK</button>
  </div>
</div>
</div>
</form>
