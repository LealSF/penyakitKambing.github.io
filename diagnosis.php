<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Diagnosis</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <!-- header -->
    <?php include('header.php') ?>
    <div class="row no-gutters mt-5">
        <?php include('sidebar.php') ?>
        <!-- Menu Utama -->
        <div class="col-md-10 p-5 pt-10">
            <div class="gambar text-center">
                <img class="img-fluid rounded " src="asset/1676746.jpg" alt="">
            </div>
            <h3><i class="fa-solid fa-chart-line m-lg-2"></i>Analisis Penyakit<hr></h3> 
            <form action="">
                <?php  
                $query = mysqli_query($conn, "SELECT * FROM gejala_tbl");
                $hitung = mysqli_num_rows($query);
                $num = 0;
                if($hitung == 0){
                    echo "<h1 class='display-6 text center'>Tidak ada data</h1>";
                }
                else {
                    while($data = mysqli_fetch_array($query)){
                    $num++;
                ?>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label"><?= $num ?></label>
                    <label class="col-sm-9 col-form-label"><?= $data['gejala_nama'] ?></label>
                    <div class="col-2">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Pilih</option>
                            <option value="0">Tidak</option>
                            <option value="0.4">Mungkin</option>
                            <option value="0.6">Kemungkinan Besar</option>
                            <option value="0.8">Hampir Pasti</option>
                            <option value="1">Pasti</option>
                          </select>
                    </div>
                </div>
                <?php }} ?>
                <div class="col mt-4">
                    <button class="btn btn-success" type="submit" name="btn_diagnosis">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>