<?php
    include '../../config/koneksi.php';

    if(isset($_POST['btn_simpan'])){
        $kode_penyakit = $_POST['kode_penyakit'];
        $nama_penyakit = $_POST['nama_penyakit'];
        $penjelasan = $_POST['penjelasan_penyakit'];
        $penanganan = $_POST['penanganan_penyakit'];
        //jika sudah terisi
        if(!empty($kode_penyakit)&&!empty($nama_penyakit)&&!empty($penjelasan)&&!empty($penanganan)){
            $input = mysqli_query($conn, "INSERT INTO penyakit_tbl (kode_penyakit,penyakit_nama,penyakit_penjelasan,penaykit_penanganan) VALUES ('$kode_penyakit','$nama_penyakit','$penjelasan','$penanganan')");
            echo "
            <script type='text/javascript'>
                swal({
                    title: 'Created',
                    text: 'Data Berhasil Ditambahkan',
                    icon: 'success',
                    button: 'Ok',
                });
            </script>";
            header('location:../dataPenyakit.php');
        }
        //jika ada yang belum terisi
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
            header('location:../dataPenyakit.php');
        }
    }

    elseif(isset($_POST['btn_update'])){
        $kode_penyakit = $_POST['kode_penyakit'];
        $nama_penyakit = $_POST['nama_penyakit'];
        $penjelasan = $_POST['penjelasan_penyakit'];
        $penanganan = $_POST['penanganan_penyakit'];
        //proses update
        if(!empty($kode_penyakit)&&!empty($nama_penyakit)&&!empty($penjelasan)&&!empty($penanganan)){
            $update = mysqli_query($conn, "UPDATE penyakit_tbl SET penyakit_nama='$nama_penyakit',penyakit_penjelasan='$penjelasan',penaykit_penanganan='$penanganan' WHERE kode_penyakit='$kode_penyakit'");
            //apabila berhasil
            if($update){
                echo "
                <script type='text/javascript'>
                    swal({
                        title: 'Updated',
                        text: 'Data Berhasil Diupdate',
                        icon: 'success',
                        button: 'Ok',
                    });
                </script>";
                header('location:../dataPenyakit.php');
            }
            // apabila gagal
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
            }
        }
    }
    
    elseif(isset($_GET['btn_delete'])){
        $kode_penyakit = $_GET['id'];
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