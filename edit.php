<?php
require 'config/koneksi.php';

$id = (int) $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

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

            <form action="proses/edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="row g-3">

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Kode Pegawai</label>
                        <input type="text" name="kode_pegawai" class="form-control" value="<?= $data['kode_pegawai']; ?>" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>" class="form-control" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?= $data['email']; ?>" class="form-control" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Departemen</label>
                        <select name="departemen" class="form-control" required>
                            <option value="">Pilih departemen</option>
                            <option value="IT" <?= $data['departemen'] == 'IT' ? 'selected' : ''; ?>>
                                IT
                            </option>
                            <option value="HRD" <?= $data['departemen'] == 'HRD' ? 'selected' : ''; ?>>
                                HRD                                </option>
                            <option value="Finance" <?= $data['departemen'] == 'Finance' ? 'selected' : ''; ?>>
                                Finance
                            </option>
                            <option value="Marketing" <?= $data['departemen'] == 'Marketing' ? 'selected' : ''; ?>>
                                Marketing
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" value="<?= $data['jabatan']; ?>" class="form-control" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                        <small class="text-muted">
                            Foto saat ini:
                            <?= $data['foto'] != "" ? htmlspecialchars($data['foto']) : 'Belum ada foto'; ?>
                        </small>
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">

                    <a href="index.php" class="btn btn-light border mr-3">
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