<?php
// Ambil data dari form
$total_pembelian = $_POST['total_pembelian'];
$member = $_POST['member'];

// Fungsi untuk menghitung diskon
function hitung_diskon($total_pembelian, $member) {
    $diskon = 0;

    if ($member == 'member') {
        if ($total_pembelian >= 500000) {
            $diskon = 20; // Diskon 10% + 10%
        } elseif ($total_pembelian >= 300000) {
            $diskon = 15; // Diskon 10% + 5%
        } else {
            $diskon = 10;
        }
    } else {
        if ($total_pembelian >= 500000) {
            $diskon = 10;
        }
    }

    return $diskon;
}

// Hitung diskon
$diskon = hitung_diskon($total_pembelian, $member);

// Hitung total pembayaran setelah diskon
$total_bayar = $total_pembelian - ($total_pembelian * $diskon / 100);

// Tampilkan hasil
echo "Total pembelian: Rp " . number_format($total_pembelian) . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Total pembayaran: Rp " . number_format($total_bayar);
?>