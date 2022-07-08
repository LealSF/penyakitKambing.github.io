<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <!-- header -->
    <?php include('headerdas.php'); ?>
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <?php include('sidebardas.php') ?>
        </div>
        
        <div class="col-md-10 p-5 pt-10">
            <?php  
              if(isset($_GET['aksi'])){
                switch($_GET['aksi']){
                    case 'detail' :
                        detail($conn);
                        break;
                    default:
                        show_data($conn);
                }
            }
            else{
                show_data($conn);
            }
            ?>
        </div>
    </div>
    <!-- function show -->
    <?php function show_data($conn){ ?>
      <h3><i class="fa-solid fa-comment-medical m-lg-2"></i>Data Riwayat Diagnosis<hr></h3>
            <div class="card bg-info m-lg-3" style="width: 18rem;">
                <div class="card-body">
                  <div class="div card-body-icon">
                    <i class="fa-solid fa-square-virus"></i>
                  </div>
                  <h5 class="card-title">Total Riwayat Diagnosis</h5>
                  <div class="display-4">
                    <?php  
                      $query = mysqli_query($conn, "SELECT * FROM log_hasil");
                      $jumlah = mysqli_num_rows($query);
                      if($jumlah >= 0){
                        echo $jumlah;
                      }
                      else{
                        echo "0";
                      }
                    ?>
                  </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" width=5%>No</th>
                        <th scope="col">Nama Peternak</th>
                        <th scope="col">Penyakit</th>
                        <th scope="col" width=10%>Nilai CF</th>
                        <th scope="col" width=20%>Tanggal</th>
                        <th scope="col">Fungsi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    if($jumlah == 0){
                      echo "<tr>
                          <td class='text-center' colspan='6'>Tidak ada data yang tersimpan</td> 
                        </tr>";
                    }else {
                      $no = 0;
                      $query = "SELECT * FROM log_hasil INNER JOIN penyakit_tbl ON penyakit_tbl.id_penyakit = log_hasil.penyakit
                      INNER JOIN gejala_tbl ON gejala_tbl.id_gejala = log_hasil.gejala ";
                      while($data = mysqli_fetch_array(mysqli_query($conn,$query))){ $no++; ?>
                        <td><?= $no ?></td>
                        <td><?= $data['nama_peternak'] ?></td>
                        <td><?= $data[''] ?></td>
                        <td><?= $data[''] ?></td>
                        <td><?= $data['nilai'] ?></td>
                        <td></td>
                   <?php }} ?>
                </tbody>
            </table> 
    <?php } ?>
    <!-- function detail -->
    <?php function detail($conn){ ?>

    <?php } ?>
</body>
</html>