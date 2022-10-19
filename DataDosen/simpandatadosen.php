<?php

include "../function.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "insert into tabdosen set
    nidn = '$_POST[nidn]',
    nama_dosen = '$_POST[namadosen]',
    pendidikan = '$_POST[pendidikan]',
    alamat = '$_POST[alamat]',
    telepon = '$_POST[telepon]'");

    echo "<script> alert ('User baru berhasil ditambahkan'); location.href='index.php'; </script>";


}



?>