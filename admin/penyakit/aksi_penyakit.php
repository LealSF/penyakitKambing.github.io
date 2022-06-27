<?php
    session_start();
    if(!isset($_SESSION['admin_username']) && !isset($_SESSION['admin_password'])){
      header('location:../../login.php');
    }
    
    include '../../config/koneksi.php';
    if(isset($_POST['btn_simpan'])){
        $kode_penyakit = $_POST['kode_penyakit'];
        $nama_penyakit = $_POST['nama_penyakit'];
        $penjelasan = $_POST['penjelasan_penyakit'];
        $penanganan = $_POST['penanganan_penyakit'];
        $query = mysqli_query($conn, "SELECT * FROM penyakit_tbl WHERE id_penyakit='$kode_penyakit'");
        $check = mysqli_num_rows($query);
        if($check){
            echo "<script>window.alert('Kode penyakit sudah ada, silahkan masukan kode yang lain');</script>";
            header('location:../dataPenyakit.php');
        }
        else{
            //jika sudah terisi
            if(!empty($kode_penyakit) && !empty($nama_penyakit) && !empty($penjelasan) && !empty($penanganan)){
                $input = mysqli_query($conn, "INSERT INTO penyakit_tbl (id_penyakit,penyakit_nama,penyakit_penjelasan,penaykit_penanganan) 
                VALUES ('$kode_penyakit','$nama_penyakit','$penjelasan','$penanganan')");
                echo "
                <script type='text/javascript'>
                    swal({
                        title: 'Created',
                        text: 'Data Berhasil Ditambahkan',
                        icon: 'success',
                        button: 'Ok',
                    });
                    window.alert('Data tersimpan');
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
                window.alert('Data tidak tersimpan');
                </script>";
                echo "<script>console.log('Gagal Menyimpan data')</script>";
                header('location:../dataPenyakit.php');
            }
        }
    }

    elseif(isset($_POST['btn_update'])){
        $id = $_POST['kode_penyakit'];
        $nama = $_POST['nama_penyakit'];
        $penjelasan = $_POST['penjelasan_Penyakit'];
        $penanganan = $_POST['penanganan_penyakit'];
        if(!empty($id) && !empty($nama) && !empty($penjelasan) && !empty($penanganan)){
            $input = mysqli_query($conn, "UPDATE penyakit_tbl SET id_penyakit='$id', penyakit_nama='$nama', penyakit_penjelasan='$penjelasan', penaykit_penanganan='$penanganan' WHERE id_penyakit='$id'");
            echo "<script>window.alert('Data Berhasil Diupdate')</script>";
            header('location:../dataPenyakit.php');
        }
        else{
            echo "<script>window.alert('Data Tidak Berhasil Diupdate')</script>";
            header('location:../dataPenyakit.php');
        }
    }
?>