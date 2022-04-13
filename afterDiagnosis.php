<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <?php include("header.php") ?>
    <div class="row no-gutters mt-5">
        <?php include("sidebar.php") ?>
        <div class="col-md-10 p-5 pt-10">
          <h1>Hasil Perhitungan<hr></h1>
          <table class="table">
            <thead class="table-dark table-sm">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Gejala yang dialami</th>
                <th scope="col">Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>01</th>
                <th>G001</th>
                <th>Kambing terlihat lesu, lemah, pucat</th>
                <th></th>
              </tr>
              <tr>
                <th>02</th>
                <th>G002</th>
                <th>Nafsu makan berkurang</th>
                <th></th>
              </tr>
              <tr>
                <th>03</th>
                <th>G002</th>
                <th>Diare kambing, perut membesar dan rambut berdiri dan kusam</th>
                <th></th>
              </tr>
            </tbody>
          </table>
          <div class="jumbotron jumbotron-fluid bg-info mt-5 p-4">
            <div class="row">
              <div class="container col-8">
                <h3>Hasil Diagnosa</h3>
                <p class="lead">Jenis Penyakit yang diderita adalah :</p>
                <h1 class="display-5 mx-4">Cacingan / 1%</h1>
              </div>
              <div class="col-4">
                <div class="gambar_hasil d-block mx-auto">
                  <img src="asset/1676753.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- Detail -->
          <div class="card mt-5">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
          <!-- saran -->
          <div class="card mt-5">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
          <!-- kemungkinan penyakit lain -->
          <div class="card mt-5">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
    </div>
</body>
</html>