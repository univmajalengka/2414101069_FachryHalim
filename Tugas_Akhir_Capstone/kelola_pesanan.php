<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { sage: { 500: '#76927d', 600: '#5c7562' } } } } }
    </script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-sage-600">Daftar Pesanan Masuk</h2>
            <div>
                <a href="form_pemesanan.php" class="bg-sage-500 text-white px-4 py-2 rounded hover:bg-sage-600 transition">+ Tambah Baru</a>
                <a href="index.html" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition ml-2">Ke Beranda</a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-sage-500 text-white text-sm">
                        <th class="p-3 text-left">Nama Pemesan</th>
                        <th class="p-3">Phone</th>
                        <th class="p-3">Tgl Wisata</th>
                        <th class="p-3">Durasi</th>
                        <th class="p-3">Peserta</th>
                        <th class="p-3 text-left">Layanan</th>
                        <th class="p-3 text-right">Total Tagihan</th>
                        <th class="p-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    <?php
                    $data = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY id DESC");
                    while($row = mysqli_fetch_array($data)){
                        // Membuat list layanan agar mudah dibaca
                        $layanan = [];
                        if($row['layanan_penginapan']) $layanan[] = "Penginapan";
                        if($row['layanan_transport']) $layanan[] = "Transport";
                        if($row['layanan_makan']) $layanan[] = "Makan";
                    ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3 font-semibold"><?= $row['nama_pemesan']; ?></td>
                        <td class="p-3 text-center"><?= $row['nomor_hp']; ?></td>
                        <td class="p-3 text-center"><?= $row['tgl_wisata']; ?></td>
                        <td class="p-3 text-center"><?= $row['durasi_wisata']; ?> Hari</td>
                        <td class="p-3 text-center"><?= $row['jumlah_peserta']; ?> Org</td>
                        <td class="p-3 text-xs text-gray-500"><?= implode(", ", $layanan); ?></td>
                        <td class="p-3 text-right font-bold text-green-600">Rp <?= number_format($row['total_tagihan'], 0, ',', '.'); ?></td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="form_edit.php?id=<?= $row['id']; ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-xs">Edit</a>
                                
                                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus pesanan atas nama <?= $row['nama_pemesan']; ?>?');" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-xs">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>