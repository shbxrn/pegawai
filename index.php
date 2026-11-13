<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'config/koneksi.php';

// Query database
$query = "SELECT * FROM pegawai";
$result = mysqli_query($conn, $query);

include 'layouts/header.php';
?>
    <main class="container py-4">

        <!-- Judul Halaman -->
        <div class="mb-4">
            <h3 class="fw-bold">Daftar Pegawai</h3>
            <p class="text-muted">
                Kelola dan pantau seluruh data pegawai perusahaan.
            </p>
        </div>

        <!-- Toolbar -->
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">

            <!-- Tombol Tambah -->
            <a href="tambah.php" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Pegawai
            </a>

            <!-- Search dan Filter -->
            <div class="d-flex flex-wrap gap-2">

                <!-- Search -->
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text" class="form-control" id="searchInput" placeholder="Cari pegawai...">
                </div>
            </div>
        </div>

        <!-- Tabel Pegawai -->
        <div class="card border-0 shadow-sm">

            <div class="card-body p-0">

                <div class="table-responsive" id="tabelPegawai">

                    <table class="table table-hover align-middle mb-0">

                        <!-- Header Tabel -->
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Pegawai</th>
                                <th>Departemen</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="employee-avatar bg-primary-subtle text-primary">
                                        <div>
                                            <div class="fw-semibold"><?= $row['nama_lengkap']; ?></div>
                                            <small class="text-muted"><?= $row['kode_pegawai']; ?></small>
                                        </div>
                                    </div>
                                </td>

                                <td><?= $row['departemen']; ?></td>
                                <td><?= $row['jabatan']; ?></td>
                                <td><?= $row['email']; ?></td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">

                                        <a href="detail.php?id=<?= $row['id']; ?>"
                                        class="btn btn-sm btn-info text-white mr-2"
                                        title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="edit.php?id=<?= $row['id']; ?>"
                                        class="btn btn-sm btn-warning mr-2"
                                        title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="hapusPegawai(<?= $row['id']; ?>)">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
include 'layouts/footer.php';
?>