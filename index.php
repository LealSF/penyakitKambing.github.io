<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webiste Analisi Penyakit Kambing Menggunakan Certainty Factor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <!-- header -->
    <?php include('header.php') ?>
    <div class="row no-gutters mt-5">
        <!-- sidebar -->
        <?php include('sidebar.php') ?>
        <!-- Menu utama -->
        <div class="col-md-10 p-5 pt-10">
            <div class="gambar text-center">
                <img class="img-fluid rounded mb-3" src="asset/1676746.jpg" alt="">
            </div>
            <h3><i class="fa-solid fa-newspaper m-lg-2"></i>Penyakit Kambing<hr></h3> 
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
              <?php 
                $query = mysqli_query($conn, "SELECT * FROM penyakit_tbl");
                $jumlah_data = mysqli_num_rows($query);
                if($jumlah_data==0){
                  echo "<div class='col'>
                    <h1 class='display-3 text-center'>Tidak ada data yang tersimpan</h1>
                </div>
                  ";
                }
                else{
                  while($data = mysqli_fetch_array($query)){
              ?>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php $data['penyakit_nama']; ?></h5>
                      <p class="card-text"><?php $potongan_kal = substr($data['penyakit_penjelasan'],0,20);
                      echo "$potongan_kal...";
                      ?></p>
                      <a href="detailPenyakit.php?id=<?php $data['id_penyakit']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
                <?php }} ?>

                <!-- <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div> -->
        </div>
        <!-- footer -->
    </div>
</body>
</html>