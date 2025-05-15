<?php
require_once __DIR__ . '/../models/pembayaran.php';
require_once __DIR__ . '/../models/pesanan.php';

use models\Pembayaran;
use models\Pesanan;

$totalPembayaran = Pembayaran::get();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'jumlah_bayar' => $_POST['jumlah_bayar'],
        'tanggal' => $_POST['tanggal'],
        'pesanan_id' => $_POST['pesanan_id']
    ];

    if (Pembayaran::create($data)) {
        header('Location: list-pembayaran.php');
        exit;
    } else {
        echo "Gagal menyimpan data pembayaran.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pembayaran</title>
    <link href="../public/css/styles.css" rel="stylesheet" />
</head>

<body>
    <h1>Form Tambah Pembayaran</h1>
    <form action="create-pembayaran.php" method="POST">
        <div class="mb-3">
            <label for="total_bayar" class="form-label">Jumlah Bayar</label>
            <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar" min="0" required>
        </div>
        <div class="mb-3">
            <label for="metode_bayar" class="form-label">Tanggal</label>
            <select class="form-control" id="tanggal" name="tanggal" required>
                <option value="Cash">Cash</option>
                <option value="Transfer">Transfer</option>
                <option value="Debit">Debit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pesanan_id" class="form-label">Pesanan</label>
            <select class="form-control" id="pesanan_id" name="pesanan_id" required>
                <option value="">-- Pilih Pesanan --</option>
                <?php foreach ($pembayaran as $pembayaran): ?>
                    <option value="<?= $pesanan['id'] ?>">
                        <?= $pembayaran['id'] ?> - <?= $pembayaran['tanggal'] ?> (<?= $pembayaran['status_bayar'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        <a href="list-pembayaran.php" class="btn btn-secondary">Kembali</a>
    </form>