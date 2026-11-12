<?php
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

        <!-- Statistik Pegawai -->
        <div class="row g-3 mb-4">

            <!-- Total Pegawai -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div>
                            <p class="text-muted mb-1">Total Pegawai</p>
                            <h3 class="fw-bold mb-0">25</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pegawai Aktif -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-success-subtle text-success">
                            <i class="bi bi-person-check-fill"></i>
                        </div>

                        <div>
                            <p class="text-muted mb-1">Pegawai Aktif</p>
                            <h3 class="fw-bold mb-0">22</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pegawai Tidak Aktif -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-warning-subtle text-warning">
                            <i class="bi bi-person-dash-fill"></i>
                        </div>

                        <div>
                            <p class="text-muted mb-1">Tidak Aktif</p>
                            <h3 class="fw-bold mb-0">3</h3>
                        </div>
                    </div>
                </div>
            </div>

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

                    <input type="text"
                        class="form-control"
                        placeholder="Cari pegawai...">
                </div>
            </div>
        </div>

        <!-- Tabel Pegawai -->
        <div class="card border-0 shadow-sm">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <!-- Header Tabel -->
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Pegawai</th>
                                <th>Departemen</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <!-- Isi Tabel -->
                        <tbody>

                            <!-- Data 1 -->
                            <tr>
                                <td>1</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="employee-avatar bg-primary-subtle text-primary">
                                        <div>
                                            <div class="fw-semibold">Andi Saputra</div>
                                            <small class="text-muted">PGW001</small>
                                        </div>
                                    </div>
                                </td>

                                <td>IT</td>
                                <td>Programmer</td>
                                <td>andi@email.com</td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Aktif
                                    </span>
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">

                                        <a href="detail.php?id=1"
                                        class="btn btn-sm btn-info text-white mr-2"
                                        title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="edit.php?id=1"
                                        class="btn btn-sm btn-warning mr-2"
                                        title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <button type="button"
                                                class="btn btn-sm btn-danger mr-2"
                                                title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>

                            <!-- Data 2 -->
                            <tr>
                                <td>2</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <div class="fw-semibold">Siti Amelia</div>
                                            <small class="text-muted">PGW002</small>
                                        </div>
                                    </div>
                                </td>

                                <td>HRD</td>
                                <td>HR Staff</td>
                                <td>siti@email.com</td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Aktif
                                    </span>
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">

                                        <a href="detail.php?id=2"
                                        class="btn btn-sm btn-info text-white mr-2">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="edit.php?id=2"
                                        class="btn btn-sm btn-warning mr-2">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <button type="button"
                                                class="btn btn-sm btn-danger mr-2">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>

                            <!-- Data 3 -->
                            <tr>
                                <td>3</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <div class="fw-semibold">Budi Santoso</div>
                                            <small class="text-muted">PGW003</small>
                                        </div>
                                    </div>
                                </td>

                                <td>Finance</td>
                                <td>Accountant</td>
                                <td>budi@email.com</td>

                                <td>
                                    <span class="badge bg-danger-subtle text-danger">
                                        Tidak Aktif
                                    </span>
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">

                                        <a href="detail.php?id=3"
                                        class="btn btn-sm btn-info text-white mr-2">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="edit.php?id=3"
                                        class="btn btn-sm btn-warning mr-2">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <button type="button"
                                                class="btn btn-sm btn-danger mr-2">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </main>
<?php
include 'layouts/footer.php';
?>