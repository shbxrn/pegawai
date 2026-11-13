<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Kembali ke halaman login
echo "<script>
        alert('Berhasil logout!');
        window.location='login.php';
      </script>";
exit;
?>