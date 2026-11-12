<?php
include 'layouts/header.php';
?>
<main class="container py-4">

    <!-- Judul -->
    <div class="mb-4">
        <h3 class="fw-bold">Edit Pegawai</h3>
        <p class="text-muted">
            Perbarui informasi data pegawai.
        </p>
    </div>

    <!-- Form Edit -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">ID Pegawai</label>
                        <input type="text" class="form-control"
                               name="id_pegawai"
                               value="PGW001" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control"
                               name="nama"
                               value="Andi Saputra" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select">
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control"
                               name="email"
                               value="andi@email.com" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control"
                               name="telepon"
                               value="081234567890" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Departemen</label>
                        <select name="departemen" class="form-select">
                            <option value="IT" selected>IT</option>
                            <option value="HRD">HRD</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control"
                               name="jabatan"
                               value="Programmer" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tanggal Bergabung</label>
                        <input type="date" class="form-control"
                               name="tanggal_bergabung"
                               value="2024-01-15" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gaji Pokok (Rp)</label>
                        <input type="number" class="form-control"
                               name="gaji"
                               value="5000000" min="0" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Status Pegawai</label>
                        <select name="status" class="form-select">
                            <option value="Aktif" selected>Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" name="foto"
                               class="form-control" accept="image/*">
                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                        </small>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control"
                                  rows="3" required>Jl. Merdeka No. 10, Malang</textarea>
                    </div>

                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2 mt-4">

                    <a href="pegawai.php" class="btn btn-light border">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>
    </div>

</main>
<?php
include 'layouts/footer.php';
?>