<?php
require '../config/koneksi.php';

// Ambil data dari form
$id = (int) $_POST['id'];

$kode_pegawai = mysqli_real_escape_string($conn, $_POST['kode_pegawai']);
$nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$departemen = mysqli_real_escape_string($conn, $_POST['departemen']);
$jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);

// Ambil foto lama
$queryFoto = mysqli_query($conn, "SELECT foto FROM pegawai WHERE id = $id");
$dataFoto = mysqli_fetch_assoc($queryFoto);

$fotoLama = $dataFoto['foto'];

// Proses upload foto baru
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if ($foto != "") {
    $nama_foto = time() . "_" . basename($foto);
    $folder = "../assets/images/profile/" . $nama_foto;

    if (move_uploaded_file($tmp, $folder)) {

        // Hapus foto lama
        if ($fotoLama != "" && file_exists("../assets/images/profile/" . $fotoLama)) {
            unlink("../assets/images/profile/" . $fotoLama);
        }

    } else {
        echo "<script>
                alert('Gagal mengupload foto!');
                history.back();
              </script>";
        exit;
    }

} else {
    // Jika tidak memilih foto baru, gunakan foto lama
    $nama_foto = $fotoLama;
}

// Cek apakah kode pegawai digunakan oleh pegawai lain
$cek = mysqli_query($conn, "SELECT * FROM pegawai 
                            WHERE kode_pegawai = '$kode_pegawai'
                            AND id != $id");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Kode pegawai sudah digunakan oleh pegawai lain!');
            history.back();
          </script>";
    exit;
}

// Query update
$query = "UPDATE pegawai SET
    kode_pegawai = '$kode_pegawai',
    nama_lengkap = '$nama_lengkap',
    email = '$email',
    departemen = '$departemen',
    jabatan = '$jabatan',
    foto = '$nama_foto'
    WHERE id = $id";

$result = mysqli_query($conn, $query);

// Cek hasil
if ($result) {
    echo "<script>
            alert('Data pegawai berhasil diperbarui!');
            window.location='../index.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal memperbarui data pegawai!');
            window.location='../edit.php?id=$id';
          </script>";
}
?>