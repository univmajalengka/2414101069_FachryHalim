<?php
include 'koneksi.php';
$id = $_GET['id'];

// Menghapus data berdasarkan ID
mysqli_query($conn, "DELETE FROM pemesanan WHERE id='$id'");

// Kembali ke halaman kelola
header("location:kelola_pesanan.php");
?>