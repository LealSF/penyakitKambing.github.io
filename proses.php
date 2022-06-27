<?php
    include ('config/koneksi.php');
    // perhitungan certainty factor (cf)
    $sqlpenyakit = mysqli_query($conn, "SELECT * FROM penyakit_tbl")
    
?>