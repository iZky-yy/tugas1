<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tugas 1 - Pembelian Baju</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{
    background:radial-gradient(circle at top,#1e293b,#020617);
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
    padding:30px;
    border-radius:20px;
    box-shadow:0 30px 80px rgba(0,0,0,.6);
}
h2{text-align:center;margin-bottom:25px}
label{display:block;margin-top:14px}
select,input{
    width:100%;
    margin-top:6px;
    padding:12px;
    border-radius:10px;
    border:none;
    background:rgba(255,255,255,.15);
    color:#fff;
}
option{color:#000}
button{
    margin-top:22px;
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:linear-gradient(135deg,#22c55e,#16a34a);
    font-weight:600;
    cursor:pointer;
}
</style>
</head>
<body>

<div class="card">
<h2>👕 TUGAS 1 - PEMBELIAN BAJU</h2>

<form method="post" action="hasil.php">
<label>Bahan Baju</label>
<select name="bahan" required>
<option value="">Pilih Bahan</option>
<option value="satin">Satin</option>
<option value="wol">Wol</option>
<option value="katun">Katun</option>
<option value="crincle">Crincle</option>
<option value="polyester">Polyester</option>
</select>

<label>Ukuran</label>
<select name="ukuran" required>
<option value="">Pilih Ukuran</option>
<option>S</option><option>M</option><option>L</option><option>XL</option>
</select>

<label>Jumlah Beli</label>
<input type="number" name="jumlah" min="1" required>

<button type="submit">Proses</button>
</form>
</div>

</body>
</html>
