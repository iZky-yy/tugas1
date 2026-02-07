<?php
date_default_timezone_set("Asia/Jakarta");

$harga = [
"satin"=>["S"=>100000,"M"=>125000,"L"=>140000,"XL"=>160000],
"wol"=>["S"=>115000,"M"=>135000,"L"=>155000,"XL"=>180000],
"katun"=>["S"=>35000,"M"=>50000,"L"=>70000,"XL"=>85000],
"crincle"=>["S"=>60000,"M"=>80000,"L"=>105000,"XL"=>120000],
"polyester"=>["S"=>40000,"M"=>50000,"L"=>60000,"XL"=>70000]
];

$bahan=$_POST['bahan'];
$ukuran=$_POST['ukuran'];
$jumlah=$_POST['jumlah'];

$harga_satuan=$harga[$bahan][$ukuran];
$total=$harga_satuan*$jumlah;

$diskon = ($jumlah>=20)?0.2:(($jumlah>=10)?0.1:(($jumlah>=5)?0.05:0));
$potongan=$total*$diskon;
$bayar=$total-$potongan;

$id="TRX".date("YmdHis");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Pembelian</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{
    background:#020617;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    color:#fff;
}
.card{
    width:420px;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:30px;
    box-shadow:0 30px 80px rgba(0,0,0,.6);
}
h2{text-align:center;margin-bottom:10px}
.row{
    display:flex;
    justify-content:space-between;
    margin:8px 0;
    font-size:14px;
}
.total{
    font-size:18px;
    font-weight:700;
    color:#22c55e;
}
.btn{
    width:100%;
    padding:12px;
    margin-top:15px;
    border:none;
    border-radius:10px;
    font-weight:600;
    cursor:pointer;
}
.print{background:#38bdf8}
.back{background:#22c55e}
@media print{
    body{background:#fff;color:#000}
    .btn{display:none}
    .card{box-shadow:none}
}
</style>
</head>
<body>

<div class="card">
<h2>🧾 HASIL PEMBELIAN</h2>

<div class="row"><span>ID Transaksi</span><span><?=$id?></span></div>
<div class="row"><span>Tanggal</span><span><?=date("d M Y H:i")?></span></div>
<hr>

<div class="row"><span>Bahan</span><span><?=ucfirst($bahan)?></span></div>
<div class="row"><span>Ukuran</span><span><?=$ukuran?></span></div>
<div class="row"><span>Harga Satuan</span><span>Rp <?=number_format($harga_satuan,0,',','.')?></span></div>
<div class="row"><span>Jumlah</span><span><?=$jumlah?></span></div>
<div class="row"><span>Total Harga</span><span>Rp <?=number_format($total,0,',','.')?></span></div>
<div class="row"><span>Diskon</span><span><?=$diskon*100?>%</span></div>

<hr>
<div class="row total"><span>Total Bayar</span><span>Rp <?=number_format($bayar,0,',','.')?></span></div>

<button class="btn print" onclick="window.print()">🖨 Cetak Struk</button>

<form action="tugas1.php">
<button class="btn back">⬅ Kembali ke Pembelian</button>
</form>
</div>

</body>
</html>
