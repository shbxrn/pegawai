<?php
include 'layouts/header.php';
?>


<main class="container py-4">

    <!-- Judul Halaman -->
    <div class="mb-4">
        <h3 class="fw-bold">Tambah Pegawai</h3>
        <p class="text-muted">
            Lengkapi formulir berikut untuk menambahkan pegawai baru.
        </p>
    </div>

    <!-- Form Tambah Pegawai -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <form action="proses/tambah.php" method="POST" enctype="multipart/form-data">

                <div class="row g-3">

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Kode Pegawai</label>
                        <input type="text" name="kode_pegawai"
                               class="form-control"
                               placeholder="Masukkan kode pegawai" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap"
                               class="form-control"
                               placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"
                               class="form-control"
                               placeholder="nama@email.com" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Departemen</label>
                        <select name="departemen" class="form-control" required>
                            <option value="">Pilih departemen</option>
                            <option value="IT">IT</option>
                            <option value="HRD">HRD</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan"
                               class="form-control"
                               placeholder="Masukkan jabatan" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" name="foto"
                               class="form-control" accept="image/*">
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">

                    <a href="index.php" class="btn btn-light border mr-3">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Pegawai
                    </button>

                </div>

            </form>

        </div>
    </div>

</main>
<?php
include 'layouts/footer.php';
?>