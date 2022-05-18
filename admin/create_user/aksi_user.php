<?php  
    include "../../config/koneksi.php";
    if(isset($_POST['btn_create'])){
        $name_dokter = $_POST['nama_dokter'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        // isi user
        if(!empty($name_dokter)&&!empty($username)&&!empty($password)){
            $create = mysqli_query($conn, "INSERT INTO admin_tbl (admin_nama,admin_username,admin_password) VALUES ('$name_dokter','$username','$password')");
            echo "
            <script type='text/javascript'>
                swal({
                    title: 'Created',
                    text: 'Berhasil Membuat Akun',
                    icon: 'success',
                    button: 'Ok',
                });
            </script>";
            header('location:../login.php');
        }
        // Jika tidak berhasil dibuat
        else {
            echo "
            <script type='text/javascript'>
            swal({
                title: 'Field',
                text: 'Tidak Berhasil Membuat Akun',
                icon: 'error',
                button: 'Ok',
            });
            </script>";
            header('location:../login.php');
        }
    }
?>