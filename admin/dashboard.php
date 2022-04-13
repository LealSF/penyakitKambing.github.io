<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di halaman pakar</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
  <!-- header -->
    <?php include("headerdas.php") ?>
      <div class="row no-gutters mt-5">
          <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <!-- Side Navbar -->
            <?php include("sidebardas.php") ?>
          </div>
          <!-- Main Menu -->
          <div class="col-md-10 p-5 pt-10">
            <h3><i class="fa-solid fa-gauge mr-2"></i>Beranda<hr></h3> 
            <div class="div row text-white">
                <div class="card bg-info m-lg-3" style="width: 18rem;">
                    <div class="card-body">
                      <div class="div card-body-icon">
                        <i class="fa-solid fa-skull-crossbones"></i>
                      </div>
                      <h5 class="card-title">Total Penyakit</h5>
                      <div class="display-4">1.200</div>
                    </div>
                </div>
                <div class="card bg-info m-lg-3" style="width: 18rem;">
                  <div class="card-body">
                    <div class="div card-body-icon">
                      <i class="fa-solid fa-temperature-full"></i>
                    </div>
                    <h5 class="card-title">Total Gejala</h5>
                    <div class="display-4">2200</div>
                  </div>
              </div>
              <div class="card bg-info m-lg-3" style="width: 18rem;">
                <div class="card-body">
                  <div class="div card-body-icon">
                    <i class="fa-solid fa-user"></i>
                  </div>
                  <h5 class="card-title">Total Pakar</h5>
                  <div class="display-4">12</div>
                </div>
            </div>
            </div>
            <div class="row bg-dark text-white m-2">
              <div class="jumbotron ">
                <h1 class="display-7">Selamat Data Di Sistem Pakar Diagnosa Pada Kambing</h1>
                <p class="lead">Labay El Sulthan Fatta</p>
                <hr class="my-4">
                <p>Untuk kelola akun Labay El Sulthan Fatta</p>
                <a class="btn btn-primary btn-lg mb-2 " href="#" role="button"><i class="fa-solid fa-gear icon-setting"></i>Pengaturan</a>
              </div>
            </div>
          </div>
      </div>
      <!-- Footer -->
      <div class="row bg-primary flex-column">
        <p>halooooo</p>
      </div>
</body>
</html>