<?php 
    include '../../config/koneksi.php';

    if(isset($_GET['btn_save'])){
        $kode_aturan = $_GET['kode_aturan'];
        $nama_penyakit = $_GET[''];
        $gejala = $_GET[''];
        $nilai_mb = $_GET['nilai_mb'];
        $nilai_md = $_GET['nilai_md'];
        // Jika terisi
        if(!empty($kode_aturan)&&!empty($nama_penyakit)&&!empty($gejala)&&!empty($nilai_mb)&&!empty($nilai_md)){
            $input = mysqli_query($conn,"INSERT INTO aturan_tbl(id_aturan,id_penyakit,id_gejala,mb_aturan,md_aturan)
            VALUES ('$kode_aturan','$nama_penyakit','$gejala','$nilai_mb','$nilai_md')");
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