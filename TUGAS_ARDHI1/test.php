<!DOCTYPE html>
<html>
<head>
    <title>Hitung Total Pembelian</title>
    <link rel="stylesheet" href="ardhi.css">
    <style>
        body {
            background-image: url('https://media1.tenor.com/m/Y1PtqpWHKzMAAAAC/maria-mikhailovna-kujou-alya-sometimes-hides-her-feelings-in-russian.gif');
            /* Custom latar belakang */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: black;
            /* Membuat teks lebih mudah dibaca dengan kontras */
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            /* Memberikan latar belakang transparan pada form */
            padding: 20px;
            border-radius: 10px;
        }

        .alert {
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
        }

        h2,
        h4 {
            color: black;
        }
    </style>
    </style>
</head>
<body>
    <h1>Hitung Total Pembelian</h1>
    <form>
        <label for="total_pembelian">Total Pembelian:</label>
        <input type="number" id="total_pembelian" name="total_pembelian" required>
        <br>
        <label for="member">Status Keanggotaan:</label>
        <select id="member" name="member">
            <option value="member">Member</option>
            <option value="non_member">Bukan Member</option>
        </select>
        <br>
        <button type="submit">Hitung</button>
    </form>
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
</body>
</html>