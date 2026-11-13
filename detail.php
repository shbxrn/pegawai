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
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold">Detail Pegawai</h3>
            <p class="text-muted mb-0">
                Informasi lengkap mengenai pegawai.
            </p>
        </div>

        <a href="index.php" class="btn btn-light border">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>

    </div>

    <!-- Profil Pegawai -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <div class="d-flex align-items-center gap-3">

                <?php
                $foto = !empty($data['foto'])
                    ? 'assets/images/profile/' . $data['foto']
                    : 'assets/images/profile/default.png';
                ?>

                <img src="<?= htmlspecialchars($foto); ?>"
                    alt="Foto <?= htmlspecialchars($data['nama_lengkap']); ?>"
                    width="150"
                    height="150"
                    style="object-fit: cover; border-radius: 50%;">

                <!-- Identitas -->
                <div class="ml-4">
                    <h4 class="fw-bold mb-1"><?= $data['nama_lengkap']; ?></h4>
                    <p class="text-muted mb-1"><?= $data['kode_pegawai']; ?> · <?= $data['jabatan']; ?></p>
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
                    <small class="text-muted">Kode Pegawai</small>
                    <p class="fw-semibold mb-0"><?= $data['kode_pegawai']; ?></p>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Departemen</small>
                    <p class="fw-semibold mb-0"><?= $data['departemen']; ?></p>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Nama Lengkap</small>
                    <p class="fw-semibold mb-0"><?= $data['nama_lengkap']; ?></p>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Jabatan</small>
                    <p class="fw-semibold mb-0"><?= $data['jabatan']; ?></p>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Email</small>
                    <p class="fw-semibold mb-0"><?= $data['email']; ?></p>
                </div>
            </div>

        </div>
    </div>

    <!-- Tombol Edit -->
    <div class="d-flex justify-content-end mt-4">

        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">
            <i class="bi bi-pencil-square me-1"></i>
            Edit Pegawai
        </a>

    </div>

</main>
<?php
include 'layouts/footer.php';
?>