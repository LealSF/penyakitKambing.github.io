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
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">1</label>
                    <label class="col-sm-9 col-form-label">Kulit muncul bintik-bintik merah yang terbentuk bisul sehingga mengalami kekakuan, penebalan, dan penskalaan</label>
                    <div class="col-2">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">2</label>
                    <label class="col-sm-9 col-form-label">Kambing terlihat lesu, lemah, pucat</label>
                    <div class="col-2">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-1 col-form-label">3</label>
                    <label class="col-sm-9 col-form-label">Kotoran kambing berwarna hijau muda, mengkilat, atau berwarna kemerahan, atau kehitaman</label>
                    <div class="col-2">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>