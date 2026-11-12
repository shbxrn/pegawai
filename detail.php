<?php
include 'layouts/header.php';
?>
<main class="container py-4">

    <!-- Judul -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold">Detail Pegawai</h3>
            <p class="text-muted mb-0">
                Informasi lengkap mengenai pegawai.
            </p>
        </div>

        <a href="pegawai.php" class="btn btn-light border">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>

    </div>

    <!-- Profil Pegawai -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <div class="d-flex align-items-center gap-3">

                <!-- Avatar -->
                <div class="rounded-circle bg-primary-subtle text-primary
                            d-flex align-items-center justify-content-center"
                     style="width: 85px; height: 85px; font-size: 28px; font-weight: bold;">
                    AS
                </div>

                <!-- Identitas -->
                <div>
                    <h4 class="fw-bold mb-1">Andi Saputra</h4>
                    <p class="text-muted mb-1">PGW001 · Programmer</p>

                    <span class="badge bg-success-subtle text-success">
                        Aktif
                    </span>
                </div>

            </div>

        </div>
    </div>

    <!-- Informasi Pegawai -->
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="fw-bold mb-0">
                <i class="bi bi-person-lines-fill me-2 text-primary"></i>
                Informasi Pegawai
            </h5>
        </div>

        <div class="card-body p-4">

            <div class="row g-4">

                <div class="col-md-6">
                    <small class="text-muted">ID Pegawai</small>
                    <p class="fw-semibold mb-0">PGW001</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Nama Lengkap</small>
                    <p class="fw-semibold mb-0">Andi Saputra</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Jenis Kelamin</small>
                    <p class="fw-semibold mb-0">Laki-laki</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Email</small>
                    <p class="fw-semibold mb-0">andi@email.com</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Nomor Telepon</small>
                    <p class="fw-semibold mb-0">081234567890</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Departemen</small>
                    <p class="fw-semibold mb-0">IT</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Jabatan</small>
                    <p class="fw-semibold mb-0">Programmer</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Tanggal Bergabung</small>
                    <p class="fw-semibold mb-0">15 Januari 2024</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Gaji Pokok</small>
                    <p class="fw-semibold mb-0">Rp5.000.000</p>
                </div>

                <div class="col-md-6">
                    <small class="text-muted">Status Pegawai</small>
                    <p class="fw-semibold mb-0">Aktif</p>
                </div>

                <div class="col-12">
                    <small class="text-muted">Alamat</small>
                    <p class="fw-semibold mb-0">
                        Jl. Merdeka No. 10, Malang
                    </p>
                </div>

            </div>

        </div>
    </div>

    <!-- Tombol Edit -->
    <div class="d-flex justify-content-end mt-4">

        <a href="edit.php?id=1" class="btn btn-warning">
            <i class="bi bi-pencil-square me-1"></i>
            Edit Pegawai
        </a>

    </div>

</main>
<?php
include 'layouts/footer.php';
?>