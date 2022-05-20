<?php 
    session_start();
    if(!isset($_SESSION['admin_username']) && !isset($_SESSION['admin_password'])){
        header('location:../../login.php');
    }
    
    include '../../config/koneksi.php';

    if(isset($_POST['btn_save'])){
        $kode_aturan = $_POST['kode_aturan'];
        $nama_penyakit = $_POST['nama_penyakit'];
        $gejala = $_POST['nama_gejala'];
        $nilai_mb = $_POST['nilai_mb'];
        $nilai_md = $_POST['nilai_md'];
        // Jika terisi
        if(!empty($kode_aturan) && !empty($nama_penyakit) && !empty($gejala) && !empty($nilai_mb) && !empty($nilai_md)){
            $insert = "INSERT INTO aturan_tbl VALUES ('$kode_aturan','$nama_penyakit','$gejala','$nilai_mb','$nilai_md')";
            $query = mysqli_query($conn,$insert);
            echo "
            <script type='text/javascript'>
                swal({
                    title: 'Created',
                    text: 'Data Berhasil Ditambahkan',
                    icon: 'success',
                    button: 'Ok',
                });
            </script>
            ";
            header('location:../dataAturan.php');
        }
        // Jika tidak
        else{
            echo "
            <script type='text/javascript'>
            swal({
                title: 'Field',
                text: 'Data Tidak Berhasil Ditambahkan',
                icon: 'error',
                button: 'Ok',
            });
            alert('Data tidak tersimpan');
            </script>
            ";
            header('location:../dataAturan.php');
        }
    }
    elseif(isset($_GET['btn_update'])){
        $kode_aturan = $_GET['kode_aturan'];
        $nama_penyakit = $_GET[''];
        $gejala = $_GET[''];
        $nilai_mb = $_GET['nilai_mb'];
        $nilai_md = $_GET['nilai_md'];
        // JIka terisi
        if(!empty($kode_aturan)&&!empty($nama_penyakit)&&!empty($gejala)&&!empty($nilai_mb)&&!empty($nilai_md)){
            $update = mysqli_query($conn,"UPDATE aturan_tbl SET id_penyakit='$nama_penyakit',id_gejala='$gejala',mb_aturan='$nilai_mb',md_aturan='$nilai_md' WHERE id_aturan='$kode_aturan'");
            // Jika berhasil diupdate
            if($update){
                echo "
                <script type='text/javascript'>
                swal({
                    title: 'Updated',
                    text: 'Data Berhasil Diupdate',
                    icon: 'success',
                    button: 'Ok',
                });
                </script>
                ";
                header('location:../dataAturan.php');
            }
            else{
                echo "
                <script type='text/javascript'>
                swal({
                    title: 'Field',
                    text: 'Data Tidak Berhasil Diupdate',
                    icon: 'error',
                    button: 'Ok',
                });
                </script>";
                header('location:../dataAturan.php');
            }
        }
    }
    elseif(isset($_GET['btn_delete'])){
        $kode_aturan = $_GET['id'];
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
                $delete = mysqli_query($conn, "DELETE FROM penyakit_tbl WHERE kode_penyakit='$kode_penyakit'");
              "swal('Poof! Your imaginary file has been deleted!', {
                icon: 'success',
              });
            } else {
              swal('Data Tidak Berhasil di Hapus');
            }
          });
          </script>";
    }
?>