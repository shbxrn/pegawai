<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Data Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="login-page">

    <div class="login-card">

        <!-- Logo / Icon -->
        <div class="text-center mb-4">

            <div class="login-icon mx-auto mb-3">
                <i class="bi bi-person-workspace"></i>
            </div>

            <h3 class="fw-bold">Welcome Back!</h3>

            <p class="text-muted">
                Silakan login untuk mengakses sistem.
            </p>

        </div>

        <!-- Form Login -->
        <form action="" method="POST">

            <!-- Email -->
            <div class="mb-3">

                <label class="form-label">Email</label>

                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Masukkan email"
                           required>
                </div>

            </div>

            <!-- Password -->
            <div class="mb-3">

                <label class="form-label">Password</label>

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password"
                           name="password"
                           id="password"
                           class="form-control"
                           placeholder="Masukkan password"
                           required>

                    <button type="button"
                            class="btn btn-outline-secondary"
                            onclick="togglePassword()">
                        <i class="bi bi-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit"
                    class="btn btn-primary w-100 py-2">
                Login
                <i class="bi bi-box-arrow-in-right ms-1"></i>
            </button>

        </form>

        <p class="text-center text-muted mt-4 mb-0 small">
            &copy; 2026 Manajemen Data Pegawai
        </p>

    </div>

</main>
<script src="assets/js/script.js"></script>
</body>
</html>