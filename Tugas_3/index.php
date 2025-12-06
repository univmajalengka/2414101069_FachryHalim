<?php
if(isset($_GET['status'])) {
    if($_GET['status'] == 'sukses') {
        echo "<h1>Selamat! Pendaftaran Berhasil!</h1>";
        echo "<p>Data sudah masuk ke database.</p>";
    } else {
        echo "<h1>Maaf, Pendaftaran Gagal!</h1>";
    }
} else {
    echo "<h1>Halaman Depan</h1>";
    echo "<a href='form-daftar.php'>Klik di sini untuk Daftar Baru</a>";
}
?>