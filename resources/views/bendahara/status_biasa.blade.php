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
                    <h1 class="mt-4 mb-4">Data Pinjaman Biasa Anggota</h1>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pinjaman
                        </div>
                        <div class="card-body table-responsive">
                            <div style="overflow-x: auto;">
                                <table id="datatablesSimple" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Anggota</th>
                                            <th>Nama</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Besar Pinjaman</th>
                                            <th>Tanggal Permohonan</th>
                                            <th>No telepon</th>
                                            <th>#</th>
                                            <th width="500px">Validasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($pinjamanbiasa as $index => $data)
                                            @if($data->jenis_pinjaman == 'Pinjaman Biasa')
                                                <tr>
                                                    <td> {{ $index+1 }}</td>
                                                    <td> {{ $data->no_anggota }} </td>
                                                    <td> {{ $data->nama }} </td>
                                                    <td>{{ $data->jenis_pinjaman }}</td>
                                                    <td> {{ $data->besar_pinjaman }} </td>
                                                    <td> {{ $data->tanggal_permohonan }} </td>
                                                    <td> {{ $data->no_telp }} </td>
                                                    <td>
                                                        {{-- <a href=" {{ route('ketua.detail_PeminjamanBiasa', ['id' => $data->id]) }} " class="btn btn-primary">Detail</a> --}}
                                                    </td>
                                                    <td >
                                                        @if ($data->status == 'terima')
                                                            <span class="btn btn-success" style="pointer-events: none; user-select: none;">Disetujui</span>
                                                        @elseif ($data->status == 'tolak')
                                                            <span class="btn btn-danger" style="pointer-events: none; user-select: none;">Ditolak</span>
                                                        @elseif ($data->status == 'sedang menunggu validasi ketua')
                                                            <span class="btn btn-warning" style="pointer-events: none; user-select: none;">Menunggu Validasi Ketua</span>
                                                        @elseif ($data->status == 'sedang menunggu validasi pengawas')
                                                            <span class="btn btn-warning" style="pointer-events: none; user-select: none;">Menunggu Validasi pengawas</span>
                                                        @else
                                                            <form action="{{ route('bendahara.validasi_PeminjamanBiasa', ['id' => $data->id]) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" name="action" value="sedzang menunggu validasi ketua" class="btn btn-success">Terima</button>
                                                                <button type="submit" name="action" value="tolak" class="btn btn-danger">Tolak</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td colspan="8">Tidak ada data pinjaman.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KELOMMPOK 1 TRPL-REGULER-2B3</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        if (window.performance && window.performance.navigation.type === 2) {
            // Tombol "Back" ditekan
            window.location.href = "{{ route('login') }}";
        }

        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
    </script>

</body>

</html>
