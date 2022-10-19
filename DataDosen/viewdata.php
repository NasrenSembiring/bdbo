<H3>tabel Dosen</H3>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama Dosen</th>
        <th>Pendidikan</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php

include "../function.php";

$no = 1;
$ambildata = mysqli_query($koneksi, "select * from tabdosen");
while ($tampil = mysqli_fetch_array($ambildata)) {
    echo
        "<tr>
        <td>$no</td>
        <td>$tampil[nidn]</td>
    <td>$tampil[nama_dosen]</td>
        <td>$tampil[pendidikan]</td>
            <td>$tampil[alamat]</td>
                <td>$tampil[telepon]</td>
                <td><a href='?nidn=$tampil[nidn]'>Hapus</td>
    <td>Ubah</td>

    </tr>";

    $no++;

}

?>
</table>

<?php
if (isset($_GET['nidn'])) {
    mysqli_query($koneksi, "delete from tabdosen where nidn='$_GET[nidn]'");

    echo "data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='viewdata.php'>";
}

?>