<?php
require '../config/koneksi.php';

header('Content-Type: application/json');

$id = (int) $_POST['id'];

$query = "DELETE FROM pegawai WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result && mysqli_affected_rows($conn) > 0) {
    echo json_encode([
        "status" => "success",
        "pesan" => "Data pegawai berhasil dihapus!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "pesan" => "Data pegawai gagal dihapus!"
    ]);
}
?>