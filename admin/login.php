<?php 
    sesseion_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de6a8fd242.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
    <!-- header -->
    <?php include("../header.php") ?>
    <div class="row no-gutters mt-5">
        <!-- sidebar -->
        <?php include("../sidebar.php") ?>
        <div class="col-md-10 p-5 pt-10">
            <div class="card top-50 start-50 translate-middle layout-login">
                <div class="card-body">
                    <h4 class="display-7 text-center">Login <hr></h1>
                    <div class="mt-5">
                        <form method="POST" action="validasi_login/validasi.php">
                            <div class="mb-3 mx-3">
                                <label class="form-label">Username</label>
                                <input type="email" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username">
                            </div>
                            <div class="mb-3 mx-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                            </div>
                            <div class="col mx-3">
                                <button type="submit" class="btn btn-danger">Create</button>
                                <button type="submit" name="btn_login" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
        </div>
    </div>
</body>
</html>