<?php
session_start();
$guest = $_SESSION['guest'];
if ($guest == ""){
  ?>
  <script>
    // documentation.location = '../index.php';
  </script>
  <?php
}else{

}
include"boot.php";
?>

<!-- Ini bagian navbar -->
  <body background="../images/nr.jpg" width="100" height="80">
    <h2 class="text-center h-font fw-bold"><img src="../images/vin.png" alt="" width="90">WELCOME TO GUEST BOOK APPLICATION<img src="../images/vin.png" alt="" width="90"></h2>
    <div class="container">
<nav class="navbar navbar-expand-lg bg-light mt-2 shadow rounded">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold"  href="dashboard.php" target="konten">GUEST BOOK NR COMPANY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil.php" target="konten">Guest Data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Entry Guest
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="input.php" target="konten">Input Guest</a></li>
            <li><a class="dropdown-item" href="rekap.php" target="konten">Recap</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search.php" method="GET" target="konten">
        <input class="form-control me-2" type="search"  placeholder="Search" name="cari" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">OK</button>
      </form>
    </div>
  </div>
  
</nav>

<iframe src="dashboard.php" name="konten" frameborder="0" width="100%" height="800"></iframe>
    <!-- Ini penutup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>