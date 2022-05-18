<?php  
  session_start();
  if(!isset($_SESSION['admin_username']) && !isset($_SESSION['admin_password'])){
    header('location:../login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyakit</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
    <style>
      .height{
        height: 500px;
      }
    </style>
  </head>
<body class="container-fluid">
    <!-- header -->
    <?php include("headerdas.php"); ?>
    <div class="row no-gutters mt-5">
        <!-- Side Navbar -->
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <?php include("sidebardas.php"); ?>
        </div>
        <div class="col-md-10 p-5 pt-10">
            <?php 
                if(isset($_GET['aksi'])){
                    switch($_GET['aksi']){
                        case 'create' :
                            create($conn);
                            break;
                        case 'update':
                            update($conn);
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

    <!-- menampilkan data -->
<?php
    function show_data($conn){
?>
    <h3><i class="fa-solid fa-skull-crossbones m-lg-2"></i>Data Penyakit<hr></h3>
    <a href="dataPenyakit.php?aksi=create"><button type="button" class="btn btn-primary mt-2 mb-3">Tambah Penyakit</button></a>
    <table class="table table-striped table-hover">
      <form class="row g-3">
      <?php  
        $query = mysqli_query($conn,"SELECT * From penyakit_tbl");
        $jumlah_data = mysqli_num_rows($query);
      ?>
      <thead class="table">
        <tr>
          <th scope="col">Kode Penyakit</th>
          <th scope="col">Nama Penyakit</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
        <?php  
          if($jumlah_data==0){
            echo "<tr>
              <td class='text-center' colspan='3'>Tidak ada data yang tersimpan</td> 
            </tr>";
          }
          else{
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id_penyakit'] ?></td>
            <td><?php echo $data['penyakit_nama'] ?></td>
            <td class="m-lg-5"><a href="dataPenyakit.php?aksi=update&id=<?= $data['id_penyakit'] ?>"><button type="button" class="btn btn-success">Update</button></a> || <a href="penyakit/aksi_penyakit.php?id=<?= $data['id_penyakit'] ?>"><button type="button" name="btn_delete" class="btn btn-danger">Hapus</button></a></td>
        </tr>
        <?php }} ?>
      </tbody>
    </table>
    <?php } ?>

    <!-- menampilkan tambah data -->
    <?php function create($conn){ ?>
    <h3><i class="fa-solid fa-skull-crossbones m-lg-2"></i>Tambah Penaykit<hr></h3>
    <form method="POST" action="penyakit/aksi_penyakit.php">
        <div class="col-12">
          <label for="inputAddress" class="form-label">Kode Penyakit</label>
          <input type="text" name="kode_penyakit" class="form-control" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nama Penaykit</label>
          <input type="text" name="nama_penyakit" class="form-control" placeholder="Tyapani">
        </div>
        <div class="col-md-12 mt-3">
          <label for="inputCity" class="form-label">Penjelasan Penyakit</label>
          <textarea type="text" name="penjelasan_penyakit" class="form-control" id="editor"></textarea>
        </div>
        <div class="col-md-12">
            <label for="inputCity" class="form-label">Penanganan</label>
            <textarea type="text" name="penanganan_penyakit" class="form-control" id="editor1"></textarea>
        </div>
        <div class="col mt-3">
          <buttom  class="btn btn-danger" onclick="goBack()">Cancel</buttom>
          <button type="submit" name="btn_simpan" class="btn btn-success">Save</button>
        </div>
    </form>
    <?php } ?>
    
    <!-- menampilkan edit data -->
    <?php function update($conn){ 
        $id = $_GET['id'];
        $edit = mysqli_query($conn,"SELECT * FROM penyakit_tbl WHERE id_penyakit='$id'");
        foreach($edit as $hasil):
    ?>
    <h3><i class="fa-solid fa-skull-crossbones m-lg-2"></i>Update Penaykit<hr></h3>
      <form name="text_form" method="POST" action="penyakit/aksi_penyakit.php" >
        <div class="col-12">
          <label for="inputAddress" class="form-label">Kode Penyakit</label>
          <input type="text" name="kode_penyakit" class="form-control" value="<?php $hasil['id_penyakit'] ?>" disabled>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nama Penaykit</label>
          <input type="text" name="nama_penyakit" class="form-control" value="<?php $hasil['penyakit_nama'] ?>">
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">Penjelasan Penyakit</label>
          <textarea type="text" name="penejelasan_Penyakit" class="form-control" id="inputCity" value="<?php $hasil['penyakit_penjelasan'] ?>"></textarea>
        </div>
        <div class="col-md-12">
            <label for="inputCity" class="form-label">Penanganan</label>
            <textarea type="text" name="penanganan_penyakit" class="form-control" id="inputCity" value="<?php $hasil['penaykit_penanganan'] ?>"></textarea>
        </div>
        <div class="col align-self-end">
          <button class="btn btn-danger" onclick="goBack()">Cancel</button>
          <button type="submit" name="btn_update" class="btn btn-success">Save</button>
        </div>
      </form>
    <?php endforeach; } ?>

    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../asset/ckeditor/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
    <script src="../asset/sweetalert.min.js"></script>
    <script defer scr="penyakit/aksi_penyakit.php"></script>
    <script>
      // CKEDITOR.replace('editor');
      
        function goBack(){
          window.history.back();
        }
    </script>
</body>
</html>