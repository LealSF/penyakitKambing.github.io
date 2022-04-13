<?php 
    include '../config/koneksi.php';
    session_start();
    isset($_POST['btn_validasi']){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $check = mysqli_query($conn,"SELECT * FROM admin_tbl WHERE admin_username='$username',admin_password='$password'");
        if($check->nums_rows > 0){
            $rows = mysqli_fetch_assoc($check);
            $_SESSION['admin_username'] = $rows['admin_nama'];
            header('location:admin/dashboard.php');
        } else{
            header('location:login.php');
            echo "
            <script type='text/javascript'>
            swal({
                title: 'Field',
                text: 'Email atau Password salah',
                icon: 'error',
                button: 'Ok',
            });
            ";
        }
    }
?>