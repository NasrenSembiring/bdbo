<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKADEMIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AKADEMIK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../DataMahasiswa/index.html">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../DataMataKuliah/index.html">Data Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../DataAbsensi/index.html">Data Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../DataNilai/index.html">Data Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../JadwalKuliah/index.html">Jadwal Kuliah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Data Dosen</h2>
            </div>
        </div>
    </div>



    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="position-relative">
                <a href="viewdata.php" type="button" class="btn btn-light position-absolute bottom-0 end-0">Lihat
                    Table</a>
            </div>
            <form action="simpandatadosen.php" method="POST" name="formPendaftaran" novalidate
                onsubmit="validateForm()">
                <div class="mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="number" class="form-control" id="nidn" aria-describedby="nidn"
                        placeholder="Masukkan NIDN" name="nidn">
                </div>
                <div class="mb-3">
                    <label for="namadosen" class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control" id="namadosen" aria-describedby="namadosen"
                        placeholder="Masukkan Nama Dosen" name="namadosen">
                </div>
                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" aria-describedby="pendidikan"
                        placeholder="Masukkan Pendidikan" name="pendidikan">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="alamat"
                        placeholder="Masukkan Alamat" name="alamat">
                </div>

                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="tel" class="form-control" id="telepon" aria-describedby="telepon"
                        placeholder="Masukkan Alamat" name="telepon">
                </div>


                <button type="submit" name="simpan" class="btn btn-primary ">Kirim</button>

                <button type="submit" class="btn btn-danger ">Batal</button>
                <a href="../index.html" class="btn btn-secondary">Beranda
                </a>



            </form>
        </div>
    </div>


    <script>
    function validateForm() {
        if (document.forms["formPendaftaran"]["nidn"].value == "") {
            alert("NIDN Dosen Tidak Boleh Kosong");
            document.forms["formPendaftaran"]["nidn"].focus();
            return false;
        }
        if (document.forms["formPendaftaran"]["namadosen"].value == "") {
            alert("Nama Tidak Boleh Kosong");
            document.forms["formPendaftaran"]["namadosen"].focus();
            return false;
        }
        if (document.forms["formPendaftaran"]["alamat"].value == "") {
            alert("Alamat Tidak Boleh Kosong");
            document.forms["formPendaftaran"]["alamat"].focus();
            return false;
        }

        if (document.forms["formPendaftaran"]["pendidikan"].value == "") {
            alert("PendidikanTidak Boleh Kosong");
            document.forms["formPendaftaran"]["pendidikan"].focus();
            return false;
        }
        if (document.forms["formPendaftaran"]["telepon"].value == "") {
            alert("PendidikanTidak Boleh Kosong");
            document.forms["formPendaftaran"]["telepon"].focus();
            return false;
        }

    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>