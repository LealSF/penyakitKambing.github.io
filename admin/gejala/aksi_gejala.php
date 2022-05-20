<?php
    session_start();
    if(!isset($_SESSION['admin_username']) && !isset($_SESSION['admin_password'])){
        header('location:../login.php');
      }

    include '../../config/koneksi.php';
    
    if(isset($_POST['btn_create'])){
        $kode_gajala = $_POST['kode_gejala'];
        $nama_gejala = $_POST['nama_gejala'];
        if(!empty($kode_gajala) && !empty($nama_gejala)){
            $query = mysqli_query($conn, "INSERT INTO gejala_tbl (`id_gejala`,`gejala_nama`) VALUES ('$kode_gajala','$nama_gejala')");
            echo "
            <script type='text/javascript'>
                swal({
                    title: 'Created',
                    text: 'Data Berhasil Ditambahkan',
                    icon: 'success',
                    button: 'Ok',
                });
            </script>";
            header('location:../dataGejala.php');
        }
        else{
            echo "
            <script type='text/javascript'>
            swal({
                title: 'Field',
                text: 'Data Tidak Berhasil Ditambahkan',
                icon: 'error',
                button: 'Ok',
            });
            </script>";
            header('location:../dataGejala.php');
        }
    }

    elseif(isset($_POST['btn_update'])){
        $kode_gajala = $_POST['kode_gejala'];
        $gejala_nama = $_POST['nama_gejala'];
        // Jika terisi
        if(!empty($kode_gajala) && !empty($gejala_nama)){
            $update = mysqli_query($conn, "UPDATE gejala_tbl SET gejala_nama='$nama_gejala' WHERE id_gejala='$kode_gajala'");
            header('location: ../dataGejala.php');
            echo "<script>window.alert('Data berhasil diperbarui')</script>";
        }
        else {
            header('location: ../dataGejala.php');
            echo "<script>window.alert('Data tidak berhasil diperbarui')</script>";
        }
    }

    elseif(isset($_GET['btn_delete'])){
        $kode_gajala = $_GET['id'];
        echo "
        <script type='text/javascript'>
        swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {",
                $delete = mysqli_query($conn, "DELETE FROM gejala_tbl WHERE kode_gejala='$kode_penyakit'");
              "swal('Poof! Your imaginary file has been deleted!', {
                icon: 'success';
              });
            } else {
              swal('Data Tidak Berhasil di Hapus');
            }
          });
          </script>";
          header('Location: ../dataGejala.php?');
    }
?>