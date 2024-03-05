<?php
include "koneksi.php";
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$tujuan = $_POST['tujuan'];
$pesan = $_POST['pesan'];
$gender = $_POST['gender'];

if ($nama_lengkap== ""){
echo "sorry name not found!";
}else{
$Save = $connect->query("insert into guest(nama_lengkap, email, no_telp, tujuan,  pesan, gender)values('$nama_lengkap','$email','$no_telp','$tujuan','$pesan', '$gender')");
}
?>
<script>
    document.location.href = 'input.php?alert=succes';
</script>