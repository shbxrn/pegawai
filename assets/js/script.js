function togglePassword() {

    let password = document.getElementById("password");
    let eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {

        password.type = "text";
        eyeIcon.classList.remove("bi-eye");
        eyeIcon.classList.add("bi-eye-slash");

    } else {

        password.type = "password";
        eyeIcon.classList.remove("bi-eye-slash");
        eyeIcon.classList.add("bi-eye");

    }

}

const searchInput = document.getElementById('searchInput');
const tabelPegawai = document.getElementById('tabelPegawai');

searchInput.addEventListener('keyup', function () {

    const keyword = this.value.toLowerCase();

    const baris = tabelPegawai.querySelectorAll('tbody tr');

    baris.forEach(function (row) {

        const data = row.textContent.toLowerCase();

        if (data.includes(keyword)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }

    });

});

function hapusPegawai(id) {

    const konfirmasi = confirm("Yakin ingin menghapus pegawai ini?");

    if (konfirmasi) {

        fetch("proses/hapus.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "id=" + encodeURIComponent(id)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.pesan);

            if (data.status === "success") {
                location.reload();
            }
        })
        .catch(error => {
            alert("Terjadi kesalahan!");
            console.error(error);
        });

    }
}