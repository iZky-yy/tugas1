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

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Dancing+Script:wght@500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Quicksand', sans-serif;
    margin:0;
    padding:0;
    min-height:100vh;
    background:url("background.jpg") no-repeat center top;
    background-size:cover;
}

/* overlay */
body::before{
    content:"";
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.35);
    z-index:-1;
}

.container{
    max-width:560px;
    margin:40px auto;
    background:rgba(255,255,255,.68);
    backdrop-filter:blur(6px);
    padding:20px;
    border-radius:16px;
}

h1{
    text-align:center;
    font-family:'Dancing Script', cursive;
    font-size:34px;
    margin-bottom:15px;
}

.info-diskon{
    background:rgba(76,81,191,.18);
    border-left:4px solid #4c51bf;
    padding:12px;
    border-radius:10px;
    margin-bottom:18px;
    font-size:14px;
}

.card{
    background:rgba(255,255,255,.55);
    padding:12px;
    border-radius:10px;
    margin-bottom:14px;
}

label{
    font-weight:500;
    font-size:14px;
}

input,select{
    width:100%;
    padding:7px;
    margin:5px 0 10px;
    border-radius:6px;
    border:1px solid #ccc;
    font-family:'Quicksand', sans-serif;
    font-size:14px;
}

button{
    width:100%;
    padding:11px;
    background:#667eea;
    color:white;
    border:none;
    border-radius:10px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
}
button:hover{
    background:#5a67d8;
}
</style>
</head>

<body>

<div class="container">
<h1>🛍️ Form Penjahitan Baju</h1>

<div class="info-diskon">
<b>🎉 Promo Diskon</b><br>
💰 Diskon <b>10%</b> untuk pembelian minimal <b>Rp 500.000</b><br>
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
