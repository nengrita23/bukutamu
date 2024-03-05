<?php
include "boot.php";
if (isset($_GET['alert'])=="succes"){
?>
<div class="alert alert-info mt-3 ms-4" role="alert">
<?php
echo "Data added successfully!!!<a href='tampil.php'> Back</a>";
}
?>
</div>
<div class="container mt-2">
<form class="form-control mt-3 bg-dark text-light" action="inputprocess.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" required>
    
    <label for="exampleInputEmail1" class="form-label">Email :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    
    <label for="exampleInputEmail1" class="form-label">No Telp :</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp" required>

    <label for="exampleInputEmail1" class="form-label">Tujuan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan" required>

    <label for="exampleInputEmail1" class="form-label">Pesan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pesan" required>

    <label for="exampleInputEmail1" class="form-label">Gender :</label>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="man"required>
    <label class="form-check-label" for="flexRadioDisabled">Man</label>
    </div>

    <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="woman"required>
    <label class="form-check-label" for="flexRadioDisabled">Woman</label>
    </div>
    <div class="text-end">
  <button type="submit" class="btn btn-light mt-3">Save</button>

  </div>
</form>
</div>
</div>

