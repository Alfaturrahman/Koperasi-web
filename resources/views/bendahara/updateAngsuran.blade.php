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
                                    </div>
                                </div>
                            </div>
                            <p class="mb-5 p-2"></p>
                        </div>
                    </div>