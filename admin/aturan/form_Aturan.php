<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penyakit</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <!-- header -->
    <?php include("headerdas.php") ?>
    <div class="row no-gutters mt-5">
        <!-- Side Navbar -->
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <?php include("sidebardas.php") ?>
        </div>
        <div class="col-md-10 p-5 pt-10">
            <h3><i class="fa-solid fa-flask m-lg-2"></i>Tambah Aturan<hr></h3>
            <form class="row g-3">
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Kode Aturan</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="A001">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nama Penyakit</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Pilih Penyakit</option>
                        <option value="P001">Kembung</option>
                        <option value="P002">Pink Eye</option>
                        <option value="P003">Anthrax</option>
                      </select>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Nama Gejala</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Pilih Gejala</option>
                        <option value="G001">Kambing terlihat lesu, lemah, pucat</option>
                        <option value="G002">Kulit muncul bintik-bintik merah yang terbentuk bisul sehingga mengalami kekakuan, penebalan, dan penskalaan</option>
                        <option value="G003">Kelenjar limpa bengkak</option>
                      </select>
                  </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Nilai MB (Meansure Of Belief)</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="nilai dari 0 - 1">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Nilai MD (Meansure Of Disbelief)</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="nilai dari 0 - 1">
                  </div>
                <div class="col align-self-end">
                  <button type="submit" class="btn btn-danger">Save</button>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>