<?php
$harga = [
    "satin"   => ["S"=>100000, "M"=>125000, "L"=>140000, "XL"=>160000],
    "wol"     => ["S"=>115000, "M"=>135000, "L"=>155000, "XL"=>180000],
    "katun"   => ["S"=>35000,  "M"=>50000,  "L"=>70000,  "XL"=>85000],
    "crincle" => ["S"=>60000,  "M"=>80000,  "L"=>105000, "XL"=>120000],
];

function rupiah($angka){
    return "Rp " . number_format($angka,0,",",".");
}

$nama = $_POST['nama'];

$total = 0;
$totalBarang = 0;

/* BAJU 1 */
$harga1   = $harga[$_POST['bahan1']][$_POST['ukuran1']];
$jumlah1  = $_POST['jumlah1'];
$subtotal1 = $harga1 * $jumlah1;

$total += $subtotal1;
$totalBarang += $jumlah1;

/* BAJU 2 */
$subtotal2 = 0;
if(!empty($_POST['bahan2'])){
    $harga2   = $harga[$_POST['bahan2']][$_POST['ukuran2']];
    $jumlah2  = $_POST['jumlah2'];
    $subtotal2 = $harga2 * $jumlah2;

    $total += $subtotal2;
    $totalBarang += $jumlah2;
}

/* DISKON */
$diskon = 0;
$ketDiskon = "Tidak ada diskon";

if($total >= 500000){
    $diskon = 0.10 * $total;
    $ketDiskon = "Diskon 10% (Minimal Rp 500.000)";
}

$totalBayar = $total - $diskon;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Pembelian</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Dancing+Script:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container-hasil">

<h2>🧾 Ringkasan Pembelian</h2>

<div class="box">
    <div class="row">
        <b>Nama Pembeli</b>
        <span><?= $nama ?></span>
    </div>
</div>

<div class="box">
    <b>Detail Perhitungan</b><br><br>

    <div class="row">
        <span>Baju 1</span>
        <span><?= rupiah($harga1) ?> × <?= $jumlah1 ?></span>
    </div>
    <div class="row">
        <b>Subtotal Baju 1</b>
        <b><?= rupiah($subtotal1) ?></b>
    </div>

    <?php if($subtotal2 > 0){ ?>
    <hr>
    <div class="row">
        <span>Baju 2</span>
        <span><?= rupiah($harga2) ?> × <?= $jumlah2 ?></span>
    </div>
    <div class="row">
        <b>Subtotal Baju 2</b>
        <b><?= rupiah($subtotal2) ?></b>
    </div>
    <?php } ?>

    <hr>

    <div class="row">
        <b>Total Barang</b>
        <b><?= $totalBarang ?> pcs</b>
    </div>

    <div class="row">
        <b>Total Sebelum Diskon</b>
        <b><?= rupiah($total) ?></b>
    </div>

    <div class="row">
        <span>Diskon</span>
        <span><?= rupiah($diskon) ?></span>
    </div>

    <span class="badge"><?= $ketDiskon ?></span>
</div>

<div class="total">
    Total Bayar<br>
    <?= rupiah($totalBayar) ?>
</div>

<a href="tugas1.php" class="btn">⬅️ Kembali ke Form</a>

</div>
</body>
</html>
