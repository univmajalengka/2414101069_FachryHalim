CREATE DATABASE wisata_db;

USE wisata_db;

CREATE TABLE pemesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemesan VARCHAR(100) NOT NULL,
    nomor_hp VARCHAR(20) NOT NULL,
    tgl_wisata DATE NOT NULL,
    durasi_wisata INT NOT NULL,
    jumlah_peserta INT NOT NULL,
    diskon DECIMAL(10,2) DEFAULT 0,
    total_tagihan DECIMAL(15,2) NOT NULL,
    layanan_penginapan TINYINT(1) DEFAULT 0,
    layanan_transport TINYINT(1) DEFAULT 0,
    layanan_makan TINYINT(1) DEFAULT 0,
    waktu_pesan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
