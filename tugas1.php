<?php
$harga = [
    "satin"   => ["S"=>100000, "M"=>125000, "L"=>140000, "XL"=>160000],
    "wol"     => ["S"=>115000, "M"=>135000, "L"=>155000, "XL"=>180000],
    "katun"   => ["S"=>35000,  "M"=>50000,  "L"=>70000,  "XL"=>85000],
    "crincle" => ["S"=>60000,  "M"=>80000,  "L"=>105000, "XL"=>120000],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Toko Baju Modern</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Dancing+Script:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
    <h1>🛍️ Form Penjahitan Baju</h1>

<div class="info-diskon">
    <b>🎉 Promo Diskon</b><br>
    💰 Diskon <b>5%</b> untuk pembelian minimal<b>Rp 100.000</b><br>
    💰 Diskon <b>8%</b> untuk pembelian minimal<b>Rp 300.000</b><br>
    💰 Diskon <b>10%</b> untuk pembelian minimal<b>Rp 500.000</b><br>
    <small>*Diskon otomatis dihitung di halaman hasil</small>
</div>

<form action="hasil.php" method="post">

<label>Nama Pembeli</label>
<input type="text" name="nama" required>

<div class="card">
<h3>Baju 1</h3>

<label>Bahan</label>
<select name="bahan1">
    <option value="satin">Satin</option>
    <option value="wol">Wol</option>
    <option value="katun">Katun</option>
    <option value="crincle">Crincle</option>
</select>

<label>Ukuran</label>
<select name="ukuran1">
    <option>S</option><option>M</option><option>L</option><option>XL</option>
</select>

<label>Jumlah</label>
<input type="number" name="jumlah1" value="1" min="1">
</div>

<div class="card">
<h3>Baju 2 (Opsional)</h3>

<label>Bahan</label>
<select name="bahan2">
    <option value="">-- Tidak membeli --</option>
    <option value="satin">Satin</option>
    <option value="wol">Wol</option>
    <option value="katun">Katun</option>
    <option value="crincle">Crincle</option>
</select>

<label>Ukuran</label>
<select name="ukuran2">
    <option>S</option><option>M</option><option>L</option><option>XL</option>
</select>

<label>Jumlah</label>
<input type="number" name="jumlah2" value="1" min="1">
</div>

<button type="submit">Hitung Total</button>
</form>
</div>

</body>
</html>
