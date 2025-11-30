<?php

function hitungDiskon($totalBelanja) {
    if ($totalBelanja >= 100000) {
        // Diskon 10%
        $diskon = $totalBelanja * 0.10;
    } elseif ($totalBelanja >= 50000 && $totalBelanja < 100000) {
        // Diskon 5%
        $diskon = $totalBelanja * 0.05;
    } else {
        // Tidak ada diskon
        $diskon = 0;
    }

    return $diskon;
}


// Contoh nilai total belanja
$totalBelanja = 120000;

// Panggil fungsi hitungDiskon()
$diskon = hitungDiskon($totalBelanja);

// Hitung total yang harus dibayar
$totalBayar = $totalBelanja - $diskon;


echo "===== PROGRAM PERHITUNGAN DISKON =====<br>";
echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon        : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar   : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
