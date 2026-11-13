<?php

require '../config/koneksi.php';

// Ambil data dari form
$kode_pegawai = mysqli_real_escape_string($conn, $_POST['kode_pegawai']);
$nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$departemen = mysqli_real_escape_string($conn, $_POST['departemen']);
$jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);

// Proses upload foto
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if ($foto != "") {
    $nama_foto = time() . "_" . basename($foto);
    $folder = "../assets/images/profile/" . $nama_foto;

    move_uploaded_file($tmp, $folder);
} else {
    $nama_foto = "";
}

// Cek apakah kode pegawai sudah digunakan
$cek = mysqli_query($conn, "SELECT * FROM pegawai WHERE kode_pegawai = '$kode_pegawai'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Kode pegawai sudah digunakan!');
            history.back();
          </script>";
    exit;
}

// Query tambah data
$query = "INSERT INTO pegawai (
    kode_pegawai,
    nama_lengkap,
    email,
    departemen,
    jabatan,
    foto
) VALUES (
    '$kode_pegawai',
    '$nama_lengkap',
    '$email',
    '$departemen',
    '$jabatan',
    '$nama_foto'
)";

// Jalankan query
$result = mysqli_query($conn, $query);

// Cek hasil
if ($result) {
    echo "<script>
            alert('Data pegawai berhasil ditambahkan!');
            window.location='../index.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal menambahkan data pegawai!');
            window.location='../tambah.php';
          </script>";
}

?>