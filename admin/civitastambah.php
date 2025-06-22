<div class="container-fluid px-4">
    <h1 class="mt-4">Civitas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.php?page=civitas">Civitas</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-file me-1"></i>
            Form Tambah Civitas
            
        </div>
        <div class="card-body ">
        <form action="acti.php" method="POST">
            <!-- Nama Lengkap dan Panggilan -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="namalengkap" name="namalengkap" type="text" placeholder="Nama Lengkap" required/>
                        <label for="namalengkap">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="panggilan" name="panggilan" type="text" placeholder="Nama Panggilan" required/>
                        <label for="panggilan">Panggilan</label>
                    </div>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakiLaki" value="L"required>
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <!-- Tempat dan Tanggal Lahir -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="tempatlahir" name="tempatlahir" type="text" placeholder="Tempat Lahir" required/>
                        <label for="tempatlahir">Tempat Lahir</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="tanggallahir" name="tanggallahir" type="date" placeholder="Tanggal Lahir" required/>
                        <label for="tanggallahir">Tanggal Lahir</label>
                    </div>
                </div>
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Masukkan alamat lengkap"required></textarea>
            </div>

            <!-- No Telepon -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="telepon" name="telepon" type="text" placeholder="No Telepon" required/>
                        <label for="telepon">No Telepon</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="tanggalmasuk" name="tanggalmasuk" type="date" placeholder="Tagggal Masuk" required/>
                        <label for="tanggalmasuk">Tanggal Masuk</label>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan -->
            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <button type="submit" name="tcivitas" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>