<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $hp = $_POST['no_hp'];
    $tgl = $_POST['tgl_wisata'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    
    // Nilai dari hidden input hasil perhitungan JS
    $harga_paket = $_POST['harga_paket_per_unit']; 
    $total_tagihan = $_POST['total_tagihan'];

    // Konversi nilai harga_paket kembali ke 0/1 untuk database lama
    $inap = 0; $trans = 0; $makan = 0;
    if ($harga_paket == 1000000 || $harga_paket == 1500000 || $harga_paket == 2200000 || $harga_paket == 2700000) $inap = 1;
    if ($harga_paket == 1200000 || $harga_paket == 1700000 || $harga_paket == 2200000 || $harga_paket == 2700000) $trans = 1;
    if ($harga_paket == 500000 || $harga_paket == 1500000 || $harga_paket == 1700000 || $harga_paket == 2700000) $makan = 1;

    // Query Insert ke Database
    $query = "INSERT INTO pemesanan 
              (nama_pemesan, nomor_hp, tgl_wisata, durasi_wisata, jumlah_peserta, layanan_penginapan, layanan_transport, layanan_makan, harga_paket, total_tagihan) 
              VALUES 
              ('$nama', '$hp', '$tgl', '$durasi', '$peserta', '$inap', '$trans', '$makan', '$harga_paket', '$total_tagihan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Pesanan Berhasil Disimpan!\\nTotal Tagihan: Rp " . number_format($total_tagihan,0,',','.') . "');
                window.location.href='kelola_pesanan.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>