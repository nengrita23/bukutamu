<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = $connect->query("delete from guest where no ='$id'");
if($delete)
?>
<script>
    document.location.href = 'tampil.php';
</script>
