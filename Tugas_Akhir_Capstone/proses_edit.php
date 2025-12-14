<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$hp = $_POST['no_hp'];
$tgl = $_POST['tgl_wisata'];
$durasi = $_POST['durasi'];
$peserta = $_POST['peserta'];

// Hitung Ulang Harga
$harga_paket = 0;
$inap = 0; $trans = 0; $makan = 0;

if (isset($_POST['layanan'])) {
    foreach ($_POST['layanan'] as $nilai) {
        $harga_paket += $nilai;
        if ($nilai == 1000000) $inap = 1;
        if ($nilai == 1200000) $trans = 1;
        if ($nilai == 500000) $makan = 1;
    }
}

$total_tagihan = $durasi * $peserta * $harga_paket;

$query = "UPDATE pemesanan SET 
            nama_pemesan='$nama', 
            nomor_hp='$hp', 
            tgl_wisata='$tgl', 
            durasi_wisata='$durasi', 
            jumlah_peserta='$peserta',
            layanan_penginapan='$inap',
            layanan_transport='$trans',
            layanan_makan='$makan',
            harga_paket='$harga_paket',
            total_tagihan='$total_tagihan'
          WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    header("location:kelola_pesanan.php");
} else {
    echo "Update Gagal: " . mysqli_error($conn);
}
?>