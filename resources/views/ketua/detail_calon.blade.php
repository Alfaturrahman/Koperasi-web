
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Koperasi Polibatam</title>
    <link rel="icon" type="image/x-icon" href="/img/659px-Logo_Politeknik_Negeri_Batam copy.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/table.css">
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-kuning">
        <!-- Sidebar Toggle-->
        <button class="btn btn-lg order-lg-0 me-3 ms-1" id="sidebarToggle" href="#!">
            <i class="fas fa-bars gelap"></i></button>
        <!-- Navbar Brand-->
        <a class="navbar-brand d-none d-sm-inline" href="index.html">
            <img src="/img/logo Koperasi.png" alt="" height="40px"></a>
        <span class="navbar-brand d-block d-sm-none" href="#">
            <img src="/img/logo polibatam.png" height="40px" width="58px">
        </span>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle gelap" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw gelap"></i></a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                    <li><button class="dropdown-item" type="button"><b>Halo,
                            </b></button></li>
                    <li><a class="dropdown-item" type="button" href="ganti-pass.php">Ganti Password</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="/" class="dropdown-item" type="button" h>Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav mt-4">
                        <a class="nav-link" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="data_anggota">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Anggota
                        </a>
                        <a class="nav-link" href="calon_anggota">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Calon Anggota
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Permintaan Pinjaman
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="status_biasa">Pinjaman Biasa</a>
                                <a class="nav-link" href="status_khusus">Pinjaman Khusus</a>
                                <a class="nav-link" href="status_urgent">Pinjaman Urgent</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Build for PBL TRPL</div>
                    2B REGULER KELOMPOK 1
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid row justify-content px-4">
                    <h1 class="mt-4 mb-4">Detail Calon Anggota Koperasi</h1>
                    <a href="{{ url('/ketua/calon_anggota') }}" class="btn btn-success" style="width:80px;">Kembali</a>
                    <p></p>
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
                                            value="<?php echo $data['nama_lengkap']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nomor_ktp" class="form-label">Nomor KTP :</label>
                                        <input type="number" class="form-control" style="width: 100%;" name="nomor_ktp"
                                            value="<?php echo $data['nomor_ktp']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="masa_berlaku_ktp" class="form-label">Masa
                                            Berlaku KTP:</label>
                                        <input type="text" class="form-control" name="masa_berlaku_ktp"
                                            id="masa_berlaku_ktp" value="<?php echo $data['masa_berlaku_ktp']; ?>"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tempat_lahir" class="form-label">Tempat & Tanggal
                                            Lahir :</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    value="<?php echo $data['tempat_lahir']; ?>" readonly>
                                            </div>
                                            <div class="col">
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    value="<?php echo $data['tanggal_lahir']; ?>" readonly>
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
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                            value="<?php echo $data['jenis_kelamin']; ?>" readonly>
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
                                            placeholder="<?php echo $data['alamat_ktp']; ?>" readonly></textarea>
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
                                            value="<?php echo $data['kelurahan_ktp']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan KTP
                                            :</label>
                                        <input type="text" class="form-control" name="kecamatan_ktp"
                                            value="<?php echo $data['kecamatan_ktp']; ?>" readonly>
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
                                            value="<?php echo $data['kota_ktp']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kode_pos" class="form-label">Kode Pos KTP :</label>
                                        <input type="number" class="form-control" name="kodepos_ktp"
                                            value="<?php echo $data['kodepos_ktp']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="alamat" class="form-label">Alamat Tinggal :</label>
                                        <textarea type="text" class="form-control" name="alamat"
                                            placeholder="<?php echo $data['alamat']; ?>" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kelurahan" class="form-label">Kelurahan Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kelurahan"
                                            value="<?php echo $data['kelurahan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kecamatan"
                                            value="<?php echo $data['kecamatan']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kabupaten" class="form-label">Kota/Kabupaten Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kota"
                                            value="<?php echo $data['kota']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kode_pos" class="form-label">Kode Pos Tinggal :</label>
                                        <input type="number" class="form-control" name="kodepos"
                                            value="<?php echo $data['kodepos']; ?>" readonly>
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
                                        <input type="text" class="form-control" name="no_telepon_rumah"
                                            value="<?php echo $data['no_telepon_rumah']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_telepon" class="form-label">HP :</label>
                                        <input type="text" class="form-control" name="no_telepon_hp"
                                            value="<?php echo $data['no_telepon_hp']; ?>" readonly>
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
                                        <input name="status_tempat_tinggal" id="status_tempat_tinggal"
                                            class="form-control" value="<?php echo $data['status_tempat_tinggal']; ?>"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="menempati_alamat_sejak" class="form-label">Menempati
                                            Alamat tsb Sejak
                                            :</label>
                                        <input type="date" class="form-control" name="menempati_alamat_tsb_sejak"
                                            value="<?php echo $data['menempati_alamat_tsb_sejak']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="pendidikan_terakhir" class="form-label">Pendidikan
                                            Terakhir :</label><br>
                                        <input name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control"
                                            value="<?php echo $data['pendidikan_terakhir']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_perkawinan" class="form-label">Status
                                            Perkawinan :</label><br>
                                        <input name="status_perkawinan" id="status_perkawinan" class="form-control"
                                            value="<?php echo $data['status_perkawinan']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_istri_suami" class="form-label">Nama Istri /
                                            Suami :</label>
                                        <input type="text" class="form-control" name="nama_istri_suami"
                                            value="<?php echo $data['nama_istri_suami']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jumlah_anak" class="form-label">Jumlah Anak
                                            :</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="number" class="form-control" class="form-check-input"
                                                    name="jumlah_anak" value="<?php echo $data['jumlah_anak']; ?>"
                                                    readonly>
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
                                        <input type="text" class="form-control" name="nama_ibu_kandung_pemohon"
                                            value="<?php echo $data['nama_ibu_kandung_pemohon']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="npwp_pribadi" class="form-label">NPWP Pribadi
                                            :</label>
                                        <input type="number" class="form-control" name="npwp_pribadi"
                                            value="<?php echo $data['npwp_pribadi']; ?>" readonly>
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
                                            value="<?php echo $data['nama_ahli_waris']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hubungan_ahli_waris" class="form-label">Hubungan
                                            Ahli Waris
                                            :</label><br>
                                        <input name="hubungan_ahli_waris" id="hubungan_ahli_waris" class="form-control"
                                            value="<?php echo $data['hubungan_ahli_waris']; ?>" readonly>
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
                                        <input type="number" class="form-control" name="no_telp_ext_kantor"
                                            value="<?php echo $data['no_telp_ext_kantor']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nik" class="form-label">Nomor Induk Pegawai
                                            :</label>
                                        <input type="number" class="form-control" name="nik"
                                            value="<?php echo $data['nik']; ?>" readonly>
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
                                            value="<?php echo $data['nomor_rekening']; ?> " readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="bagian" class="form-label">Divisi/ Jabatan :</label>
                                        <input type="text" class="form-control" name="bagian"
                                            value="<?php echo $data['bagian']; ?>" readonly>
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
                                        <input type="date" class="form-control" name="tgl_masuk_keperusahaan"
                                            value="<?php echo $data['tgl_masuk_keperusahaan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_karyawan" class="form-label">Status Karyawan
                                            :</label>
                                        <input name="status_karyawan" id="status_karyawan" class="form-control"
                                            value="<?php echo $data['status_karyawan']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-header">
                            File Pendukung
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Foto (2x3) :</label>
                                        <img class="img-thumbnail" src="img/<?php echo $data['foto']; ?>"
                                            style="width:150px;height:150px;" alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="foto_KTP" class="form-label">Foto KTP :</label>
                                        <img class="img-thumbnail" src="img/<?php echo $data['foto_ktp']; ?>"
                                            style="width:150px;height:150px;" alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ttd" class="form-label">Tanda Tangan :</label>
                                        <img src="img/<?php echo $data['ttd']; ?>" style="width:150px;height:150px;"
                                            alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="id_card" class="form-label">Id Card :</label>
                                        <img src="img/<?php echo $data['id_card']; ?>" style="width:150px;height:150px;"
                                            alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-header">
                            Persetujuan
                        </div>
                        <div class="card-body">
                            <form method="post" action="terima.php" enctype="multipart/form-data"
                                onsubmit="return showPopup()">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" style="width:150px;">No. Anggota :</label>
                                        <input type="text" class="form-control" style="width:150px;" name="no_anggota"
                                            required>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Bulan Pembayaran Pertama Wajib :</label>
                                        <select name="bulan" id="bulan.simpanan" style="width:150px;"
                                            class="form-control" required>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="Aprill">Aprill</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Tahun Pembayaran Pertama :</label>
                                        <input type="number" class="form-control" style="width:150px;" name="tahun"
                                            required>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Password Akun Anggota :</label>
                                        <input type="text" class="form-control" style="width:200px;" name="password"
                                            required>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" id="date" name="tanggal_gabung" value="CurrentDate">
                                        <input type="hidden" id="jumlah" name="jumlah" value="50000">
                                        <select name="roles" id="roles" style="display:none;">
                                            <option value="Anggota">Anggota</option>
                                        </select>
                                        <input type="hidden" name="id" value="<?php echo $data['nomor_ktp']; ?>">
                                        <select name="status" id="status_karyawan" style="display:none;">
                                            <option value="Aktif">Aktif</option>
                                        </select>
                                        <input type="submit" class="btn btn-success" name="submit" value="Terima"
                                            style="width:80px;">
                                    </div>
                                </div>
                            </form>
                            <a href="tolak.php?id=<?php echo $data['nomor_ktp']; ?>" class="btn btn-danger"
                                style="width:80px;">Tolak</a>
                        </div>
                    </div>
                </div>
        <p></p>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; KELOMPOK 1 TRPL-REGULER-2B3</div>
            </div>
        </div>
    </footer>
    </div>
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
