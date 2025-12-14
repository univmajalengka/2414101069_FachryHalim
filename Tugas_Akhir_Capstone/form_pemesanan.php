<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Paket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { sage: { 500: '#76927d', 600: '#5c7562', 700: '#4a5e50' } } } } }
    </script>
</head>
<body class="bg-gray-100 font-sans p-6">

    <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg border-t-4 border-sage-600">
        <h2 class="text-2xl font-bold text-sage-700 mb-6 border-b pb-2">Form Pemesanan Paket Wisata</h2>

        <form action="proses_tambah.php" method="POST" onsubmit="return validasiForm()">
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Nama Pemesan</label>
                <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Nomor HP</label>
                <input type="number" id="hp" name="no_hp" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-bold mb-1">Tanggal Wisata</label>
                    <input type="date" id="tgl" name="tgl_wisata" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-1">Durasi (Hari)</label>
                    <input type="number" id="durasi" name="durasi" value="1" min="1" oninput="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-1">Pilih Layanan</label>
                <select id="layanan" name="layanan" onchange="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
                    <option value="0">--- Pilih Layanan (Harga/Unit) ---</option>
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
                <input type="number" id="peserta" name="peserta" value="1" min="1" oninput="hitungTagihan()" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Harga Paket (Per Unit):</span>
                    <span id="harga_paket_display" class="font-bold">Rp 0</span>
                    <input type="hidden" id="harga_paket_hidden" name="harga_paket_per_unit" value="0">
                </div>
                <div class="flex justify-between border-t pt-2">
                    <span class="text-xl font-bold text-green-700">Total Tagihan Baru:</span>
                    <span id="total_tagihan_display" class="text-xl font-bold text-green-700">Rp 0</span>
                    <input type="hidden" id="total_tagihan_hidden" name="total_tagihan" value="0">
                </div>
            </div>

            <div class="flex gap-3 mt-6">
                <a href="index.html" class="flex-1 bg-gray-400 text-white py-2 rounded hover:bg-gray-500 font-bold text-center transition">Batal</a>
                <button type="submit" name="simpan" class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 font-bold transition">Simpan Pemesanan</button>
            </div>
        </form>
    </div>

    <script>
        function hitungTagihan() {
            const hargaUnit = parseInt(document.getElementById('layanan').value);
            const durasi = parseInt(document.getElementById('durasi').value) || 0;
            const peserta = parseInt(document.getElementById('peserta').value) || 0;

            // RUMUS SESUAI SOAL: Jumlah Tagihan = Durasi x Peserta x Harga Paket
            const totalTagihan = durasi * peserta * hargaUnit;

            // Update tampilan Harga Paket (Per Unit)
            document.getElementById('harga_paket_display').innerText = formatRupiah(hargaUnit);
            document.getElementById('harga_paket_hidden').value = hargaUnit;
            
            // Update tampilan Total Tagihan
            document.getElementById('total_tagihan_display').innerText = formatRupiah(totalTagihan);
            document.getElementById('total_tagihan_hidden').value = totalTagihan;
        }

        function formatRupiah(angka) {
            let reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return 'Rp ' + ribuan;
        }

        // Jalankan perhitungan saat halaman dimuat
        window.onload = hitungTagihan;

        // Validasi Form
        function validasiForm() {
            let nama = document.getElementById("nama").value;
            let hp = document.getElementById("hp").value;
            let tgl = document.getElementById("tgl").value;
            let hargaUnit = parseInt(document.getElementById('layanan').value);

            if (nama == "" || hp == "" || tgl == "") {
                alert("Data form pemesanan harus terisi lengkap!");
                return false; 
            }
            if (hargaUnit == 0) {
                 alert("Anda harus memilih setidaknya satu layanan paket perjalanan!");
                return false; 
            }
            return true;
        }
    </script>
</body>
</html>