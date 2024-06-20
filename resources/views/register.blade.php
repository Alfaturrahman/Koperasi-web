<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Koperasi Polibatam</title>
    <link rel="icon" type="image/x-icon" href="img/659px-Logo_Politeknik_Negeri_Batam copy.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/color.css">
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-kuning">
        <a href="/" class="btn btn-success" style="margin-left: 1cm;"><i class="fas fa-arrow-left"></i></a>
        <!-- Navbar Brand-->
        <a class="navbar-brand" style="margin-left: 1cm;" href="">
            <img src="img/logo Koperasi.png" alt="" height="40px"></a>
    </nav>

    <!--FORMULIR-->
    <div id="layoutSidenav_content">
        <main>
            <div class="container mt-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mb-4">FORMULIR PERMOHONAN KEANGGOTAAN</h3>
                                <h3 class="text-center mb-4">KOPERASI POLIBATAM</h3>
                                <hr style="height:3px;">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" onsubmit="return showPopup()">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header">
                                            Data Pribadi
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap" class="form-label">Nama Lengkap
                                                            (sesuai KTP):</label>
                                                        <input type="text" class="form-control" name="nama_lengkap"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nomor_ktp" class="form-label">Nomor KTP :</label>
                                                        <input type="number" class="form-control" style="width: 100%;"
                                                            name="nomor_ktp" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="masa_berlaku_ktp" class="form-label">Masa
                                                            Berlaku KTP:</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="date" class="form-control"
                                                                    name="masa_berlaku_ktp" id="masa_berlaku_ktp">
                                                            </div>
                                                            <div class="form-check col" style="margin-left:10px;">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="Seumur Hidup" name="masa_berlaku_ktp"
                                                                    id="masa_berlaku_ktp_checkbox">
                                                                <label class="form-check-label"
                                                                    for="masa_berlaku_ktp_checkbox">Seumur Hidup</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir" class="form-label">Tempat & Tanggal
                                                            Lahir :</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" name="tempat_lahir"
                                                                    class="form-control" required>
                                                            </div>
                                                            <div class="col">
                                                                <input type="date" name="tanggal_lahir"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin
                                                            :</label>
                                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                                            class="form-select">
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="alamat" class="form-label">Alamat KTP :</label>
                                                        <textarea type="text" class="form-control" name="alamat_ktp"
                                                            required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kelurahan" class="form-label">Kelurahan KTP
                                                            :</label>
                                                        <input type="text" class="form-control" name="kelurahan_ktp"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kecamatan" class="form-label">Kecamatan KTP
                                                            :</label>
                                                        <input type="text" class="form-control" name="kecamatan_ktp"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kabupaten" class="form-label">Kota/Kabupaten KTP
                                                            :</label>
                                                        <input type="text" class="form-control" name="kota_ktp"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kode_pos" class="form-label">Kode Pos KTP :</label>
                                                        <input type="number" class="form-control" name="kodepos_ktp"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="alamat" class="form-label">Alamat Tinggal:</label>
                                                        <textarea type="text" class="form-control"
                                                            name="alamat"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kelurahan" class="form-label">Kelurahan
                                                            Tinggal:</label>
                                                        <input type="text" class="form-control" name="kelurahan">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kecamatan" class="form-label">Kecamatan
                                                            Tinggal:</label>
                                                        <input type="text" class="form-control" name="kecamatan">
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kabupaten" class="form-label">Kota/Kabupaten
                                                            Tinggal:</label>
                                                        <input type="text" class="form-control" name="kota">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="kode_pos" class="form-label">Kode Pos
                                                            Tinggal:</label>
                                                        <input type="number" class="form-control" name="kodepos">
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="no_telepon">No. Telepon </label><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="no_telepon" class="form-label">Rumah :</label>
                                                        <input type="text" class="form-control" name="no_telepon_rumah">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="no_telepon" class="form-label">HP :</label>
                                                        <input type="text" class="form-control" name="no_telepon_hp">
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="status_tempat_tinggal" class="form-label">Status
                                                            Tempat Tinggal
                                                            :</label><br>
                                                        <select name="status_tempat_tinggal" id="status_tempat_tinggal"
                                                            class="form-select">
                                                            <option value="Milik Sendiri">Milik Sendiri</option>
                                                            <option value="Rumah Dinas">Rumah Dinas</option>
                                                            <option value="Milik Orang Tua">Milik Orang Tua</option>
                                                            <option value="Kontrak">Kontrak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="menempati_alamat_sejak" class="form-label">Menempati
                                                            Alamat tsb Sejak
                                                            :</label>
                                                        <input type="date" class="form-control"
                                                            name="menempati_alamat_tsb_sejak" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="pendidikan_terakhir" class="form-label">Pendidikan
                                                            Terakhir :</label><br>
                                                        <select name="pendidikan_terakhir" id="pendidikan_terakhir"
                                                            class="form-select">
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Akademi">Akademi</option>
                                                            <option value="Universitas">Universitas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="status_perkawinan" class="form-label">Status
                                                            Perkawinan :</label><br>
                                                        <select name="status_perkawinan" id="status_perkawinan"
                                                            class="form-select">
                                                            <option value="Lajang">Lajang</option>
                                                            <option value="Menikah">Menikah</option>
                                                            <option value="Duda / Janda">Duda/Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nama_istri_suami" class="form-label">Nama Istri /
                                                            Suami :</label>
                                                        <input type="text" class="form-control" name="nama_istri_suami">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="jumlah_anak" class="form-label">Jumlah Anak
                                                            :</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="number" class="form-control"
                                                                    class="form-check-input" name="jumlah_anak">
                                                            </div>
                                                            <div class="col">
                                                                <label for="" class="form-label">Orang</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nama_ibu_kandung_pemohon" class="form-label">Nama
                                                            Ibu Kandung Pemohon
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            name="nama_ibu_kandung_pemohon" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="npwp_pribadi" class="form-label">NPWP Pribadi
                                                            :</label>
                                                        <input type="number" class="form-control" name="npwp_pribadi"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nama_ahli_waris" class="form-label">Nama Ahli Waris
                                                            :</label>
                                                        <input type="text" class="form-control" name="nama_ahli_waris"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="hubungan_ahli_waris" class="form-label">Hubungan
                                                            Ahli Waris
                                                            :</label><br>
                                                        <select name="hubungan_ahli_waris" id="hubungan_ahli_waris"
                                                            class="form-select">
                                                            <option value="Istri / Suami">Istri / Suami</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Lainnya, Sebutkan ADIK">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="card">
                                        <div class="card-header">
                                            Data Pekerjaan
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="no_telp_ext_kantor" class="form-label">No. Telp ext
                                                            Kantor :</label>
                                                        <input type="number" class="form-control"
                                                            name="no_telp_ext_kantor" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nik" class="form-label">Nomor Induk Pegawai
                                                            :</label>
                                                        <input type="number" class="form-control" name="nik" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nomor_rekening" class="form-label">Nomor Rekening
                                                            BNI :</label>
                                                        <input type="text" class="form-control" name="nomor_rekening"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="bagian" class="form-label">Divisi/ Jabatan :</label>
                                                        <input type="text" class="form-control" name="bagian" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="tgl_masuk_perusahaan" class="form-label">Tgl Masuk
                                                            Ke Perusahaan
                                                            :</label>
                                                        <input type="date" class="form-control"
                                                            name="tgl_masuk_keperusahaan" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="status_karyawan" class="form-label">Status Karyawan
                                                            :</label>
                                                        <select name="status_karyawan" id="status_karyawan"
                                                            class="form-select">
                                                            <option value="Karyawan Tetap">Karyawan Tetap</option>
                                                            <option value="Kontrak">Kontrak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="card">
                                        <div class="card-header">
                                            Upload File Pendukung
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="foto" class="form-label">Foto (2x3) :</label>
                                                        <input type="file" class="form-control" id="foto" name="foto"
                                                            accept="image/jpeg, image/png, image/gif" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="foto_KTP" class="form-label">Foto KTP :</label>
                                                        <input type="file" class="form-control" id="foto"
                                                            name="foto_ktp" accept="image/jpeg, image/png, image/gif"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="ttd" class="form-label">Tanda Tangan :</label>
                                                        <input type="file" class="form-control" id="ttd" name="ttd"
                                                            accept="image/jpeg, image/png, image/gif" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="id_card" class="form-label">Id Card :</label>
                                                        <input type="file" class="form-control" id="foto" name="id_card"
                                                            accept="image/jpeg, image/png, image/gif" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="text-center">
                                        <input type="hidden" id="date" name="tanggal_daftar" value="">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Kirim">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <p class="mb-5 p-2"></p>
                </div>
            </div>
        </main>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; KELOMPOK 1 TRPL-REGULER-2B</div>
            </div>
        </div>
    </footer>
    </div>
    <script>
    function showPopup() {
        // Display the pop-up
        if (confirm("Apakah Anda Yakin Data sudah benar ?")) {
            // If the user clicks "OK", return true to submit the form
            return true;
        } else {
            // If the user clicks "Cancel", close the pop-up and return false
            return false;
        }
    }
</script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
