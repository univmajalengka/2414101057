<?php
// proses_pembelian.php

require_once 'koneksi.php'; // Memanggil file koneksi

// Mengambil data dari form yang dikirim oleh JavaScript
$nama_pelanggan = $_POST['name'];
$no_whatsapp = $_POST['whatsapp'];
$alamat = $_POST['address'];
$metode_pembayaran = $_POST['payment'];
$nama_produk = $_POST['productName'];

// 1. Cari produk di database berdasarkan nama untuk mendapatkan ID dan Harga
$sql_produk = "SELECT id, harga FROM produk WHERE nama_produk = ?";
$stmt_produk = mysqli_prepare($conn, $sql_produk);
mysqli_stmt_bind_param($stmt_produk, "s", $nama_produk);
mysqli_stmt_execute($stmt_produk);
$result_produk = mysqli_stmt_get_result($stmt_produk);
$produk = mysqli_fetch_assoc($result_produk);

if ($produk) {
    $produk_id = $produk['id'];
    $harga_saat_beli = $produk['harga'];
    
    // Memulai transaksi database (agar data konsisten)
    mysqli_autocommit($conn, false);

    // 2. Masukkan data ke tabel `pesanan`
    $sql_pesanan = "INSERT INTO pesanan (nama_pelanggan, no_whatsapp, alamat, metode_pembayaran) VALUES (?, ?, ?, ?)";
    $stmt_pesanan = mysqli_prepare($conn, $sql_pesanan);
    mysqli_stmt_bind_param($stmt_pesanan, "ssss", $nama_pelanggan, $no_whatsapp, $alamat, $metode_pembayaran);
    $sukses_pesanan = mysqli_stmt_execute($stmt_pesanan);
    
    // Dapatkan ID dari pesanan yang baru saja dibuat
    $pesanan_id = mysqli_insert_id($conn);

    // 3. Masukkan data ke tabel `detail_pesanan`
    $sql_detail = "INSERT INTO detail_pesanan (pesanan_id, produk_id, harga_saat_beli) VALUES (?, ?, ?)";
    $stmt_detail = mysqli_prepare($conn, $sql_detail);
    mysqli_stmt_bind_param($stmt_detail, "iii", $pesanan_id, $produk_id, $harga_saat_beli);
    $sukses_detail = mysqli_stmt_execute($stmt_detail);

    // 4. Jika kedua proses berhasil, simpan perubahan. Jika tidak, batalkan.
    if ($sukses_pesanan && $sukses_detail) {
        mysqli_commit($conn);
        echo json_encode(['status' => 'sukses', 'message' => 'Pesanan berhasil dibuat!']);
    } else {
        mysqli_rollback($conn);
        echo json_encode(['status' => 'gagal', 'message' => 'Terjadi kesalahan saat membuat pesanan.']);
    }

} else {
    echo json_encode(['status' => 'gagal', 'message' => 'Produk tidak ditemukan.']);
}

mysqli_close($conn);
?>