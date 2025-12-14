<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id='$id'");
$data = mysqli_fetch_array($query);

// Menghitung kembali harga paket (per unit) yang tersimpan
$current_harga_paket = 0;
if ($data['layanan_penginapan']) $current_harga_paket += 1000000;
if ($data['layanan_transport']) $current_harga_paket += 1200000;
if ($data['layanan_makan']) $current_harga_paket += 500000;

// Menentukan opsi yang sedang aktif untuk dropdown
$layanan_aktif_text = '';
if ($current_harga_paket == 1000000) $layanan_aktif_text = 'Penginapan (Rp 1.000.000)';
elseif ($current_harga_paket == 1200000) $layanan_aktif_text = 'Transportasi (Rp 1.200.000)';
elseif ($current_harga_paket == 500000) $layanan_aktif_text = 'Makanan (Rp 500.000)';
elseif ($current_harga_paket == 2200000) $layanan_aktif_text = 'Penginapan & Transportasi (Rp 2.200.000)';
elseif ($current_harga_paket == 1500000) $layanan_aktif_text = 'Penginapan & Makanan (Rp 1.500.000)';
elseif ($current_harga_paket == 1700000) $layanan_aktif_text = 'Transportasi & Makanan (Rp 1.700.000)';
elseif ($current_harga_paket == 2700000) $layanan_aktif_text = 'Semua Layanan (Rp 2.700.000)';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="path/to/js/perhitungan.js" async></script> 
    <script>
        tailwind.config = { theme: { extend: { colors: { sage: { 500: '#76927d', 600: '#5c7562', 700: '#4a5e50' } } } } }
        
        // Fungsi JS untuk Perhitungan Dinamis (copy-paste dari form_pemesanan.php)
        function hitungTagihan() {
            const hargaUnit = parseInt(document.getElementById('layanan').value);
            const durasi = parseInt(document.getElementById('durasi').value) || 0;
            const peserta = parseInt(document.getElementById('peserta').value) || 0;

            const totalTagihan = durasi * peserta * hargaUnit;

            document.getElementById('harga_paket_display').innerText = formatRupiah(hargaUnit);
            document.getElementById('harga_paket_hidden').value = hargaUnit;
            
            document.getElementById('total_tagihan_display').innerText = formatRupiah(totalTagihan);
            document.getElementById('total_tagihan_hidden').value = totalTagihan;
        }

        function formatRupiah(angka) {
            let reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return 'Rp ' + ribuan;
        }

        window.onload = hitungTagihan;
    </script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg border-t-4 border-blue-600">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Data Pesanan</h2>
        
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Nama Pemesan</label>
                <input type="text" name="nama" value="<?= $data['nama_pemesan']; ?>" readonly class="w-full border-b border-gray-400 p-2 bg-gray-50/0 font-semibold focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Nomor HP</label>
                <input type="text" name="no_hp" value="<?= $data['nomor_hp']; ?>" class="w-full border border-gray-300 rounded p-2 focus:border-blue-500">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-bold mb-1">Tanggal Wisata</label>
                    <input type="date" name="tgl_wisata" value="<?= $data['tgl_wisata']; ?>" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-1">Durasi (Hari)</label>
                    <input type="number" id="durasi" name="durasi" value="<?= $data['durasi_wisata']; ?>" min="1" oninput="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Pilih Layanan</label>
                <select id="layanan" name="layanan" onchange="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
                    <option value="<?= $current_harga_paket; ?>"><?= $layanan_aktif_text ?: '--- Pilih Layanan (Harga/Unit) ---'; ?></option> 
                    <option value="1000000">Penginapan (Rp 1.000.000)</option>
                    <option value="1200000">Transportasi (Rp 1.200.000)</option>
                    <option value="500000">Makanan (Rp 500.000)</option>
                    <option value="2200000">Penginapan & Transportasi (Rp 2.200.000)</option>
                    <option value="1500000">Penginapan & Makanan (Rp 1.500.000)</option>
                    <option value="1700000">Transportasi & Makanan (Rp 1.700.000)</option>
                    <option value="2700000">Semua Layanan (Rp 2.700.000)</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Jumlah Peserta</label>
                <input type="number" id="peserta" name="peserta" value="<?= $data['jumlah_peserta']; ?>" min="1" oninput="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="mt-6 p-4 bg-green-100 rounded-lg border border-green-300">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Harga Paket (Per Unit):</span>
                    <span id="harga_paket_display" class="font-bold">Rp <?= number_format($current_harga_paket); ?></span>
                    <input type="hidden" id="harga_paket_hidden" name="harga_paket_per_unit" value="<?= $current_harga_paket; ?>">
                </div>
                <div class="flex justify-between border-t border-green-300 pt-2">
                    <span class="text-xl font-bold text-green-700">Total Tagihan Baru:</span>
                    <span id="total_tagihan_display" class="text-xl font-bold text-green-700">Rp <?= number_format($data['total_tagihan']); ?></span>
                    <input type="hidden" id="total_tagihan_hidden" name="total_tagihan" value="<?= $data['total_tagihan']; ?>">
                </div>
            </div>

            <div class="flex gap-3 mt-6">
                <a href="kelola_pesanan.php" class="flex-1 bg-gray-400 text-white py-2 rounded hover:bg-gray-500 font-bold text-center transition">Batal</a>
                <button type="submit" class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 font-bold transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>