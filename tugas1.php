<?php
$harga = [
    "satin" => ["S"=>100000, "M"=>125000, "L"=>140000, "XL"=>160000],
    "wol" => ["S"=>115000, "M"=>135000, "L"=>155000, "XL"=>180000],
    "katun" => ["S"=>35000, "M"=>50000, "L"=>70000, "XL"=>85000],
    "crincle" => ["S"=>60000, "M"=>80000, "L"=>105000, "XL"=>120000],
];

function rupiah($angka){
    return "Rp " . number_format($angka,0,",",".");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Toko Baju Modern</title>
<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#667eea,#764ba2);
    margin:0;
    padding:0;
}
.container{
    max-width:900px;
    margin:40px auto;
    background:#fff;
    border-radius:12px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}
h1{
    text-align:center;
    color:#4a4a4a;
}
.card{
    border:1px solid #ddd;
    border-radius:10px;
    padding:20px;
    margin-bottom:20px;
}
label{
    font-weight:600;
}
input, select{
    width:100%;
    padding:10px;
    margin-top:6px;
    margin-bottom:15px;
    border-radius:6px;
    border:1px solid #ccc;
}
button{
    background:#667eea;
    color:#fff;
    border:none;
    padding:12px 25px;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
}
button:hover{
    background:#5a67d8;
}
.result{
    background:#f9f9f9;
    padding:20px;
    border-radius:10px;
}
.total{
    font-size:18px;
    font-weight:bold;
    color:#2d3748;
}
.footer{
    text-align:center;
    margin-top:30px;
    color:#777;
}
</style>
</head>

<body>
<div class="container">
<h1>🛍️ Form Pembelian Baju</h1>

<form method="post">

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
<input type="number" name="jumlah1" min="1" value="1">
</div>

<div class="card">
<h3>Baju 2</h3>
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
<input type="number" name="jumlah2" min="1" value="1">
</div>

<button type="submit" name="beli">Hitung Total</button>
</form>

<?php
if(isset($_POST['beli'])){
    $nama = $_POST['nama'];

    $total = 0;

    // BAJU 1
    $bahan1 = $_POST['bahan1'];
    $ukuran1 = $_POST['ukuran1'];
    $jumlah1 = $_POST['jumlah1'];
    $subtotal1 = $harga[$bahan1][$ukuran1] * $jumlah1;
    $total += $subtotal1;

    // BAJU 2 (opsional)
    if(!empty($_POST['bahan2'])){
        $bahan2 = $_POST['bahan2'];
        $ukuran2 = $_POST['ukuran2'];
        $jumlah2 = $_POST['jumlah2'];
        $subtotal2 = $harga[$bahan2][$ukuran2] * $jumlah2;
        $total += $subtotal2;
    }
?>
<div class="result">
<h3>🧾 Detail Pembelian</h3>
<p><b>Nama:</b> <?= $nama ?></p>

<p>Baju 1: <?= ucfirst($bahan1) ?> (<?= $ukuran1 ?>) x <?= $jumlah1 ?> = <?= rupiah($subtotal1) ?></p>

<?php if(!empty($_POST['bahan2'])){ ?>
<p>Baju 2: <?= ucfirst($bahan2) ?> (<?= $ukuran2 ?>) x <?= $jumlah2 ?> = <?= rupiah($subtotal2) ?></p>
<?php } ?>

<hr>
<p class="total">Total Bayar: <?= rupiah($total) ?></p>
</div>
<?php } ?>

<div class="footer">
© 2026 Toko Baju PHP | Desain Modern
</div>
</div>
</body>
</html>
