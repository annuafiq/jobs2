<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bagian 1: Menampilkan informasi pengguna
$nis = "2233262";
$nama = "Muhammad Afiq Ardianta";
$alamat = "Tegalarum Rt/01 Rw/04, Ngaluran, Mranggen";
$telepon = "0882005421918";
$email = "nggopublik@gmail.com";
 
echo "<h1>Informasi Pengguna</h1>";
echo "Nis : $nis<br>";
echo "Nama : $nama<br>";
echo "Alamat : $alamat<br>";
echo "Telepon : $telepon<br>";
echo "Email : $email<br>";
 
 
// Bagian 3: Menghitung nilai dan menentukan grade
echo "<h1>Informasi Nilai</h1>";
?>
 
<form action="job2.php" method="GET">
Nilai Tugas: <input type="text" name="tugas"><br>
Nilai UTS: <input type="text" name="uts"><br>
Nilai UAS: <input type="text" name="uas"><br>
<input type="submit">
</form>
 
<?php
$tugas = $_GET["tugas"];
$uts = $_GET["uts"];
$uas = $_GET["uas"];
 
$nilai_akhir = ($tugas * 0.20) + ($uts * 0.35) + ($uas * 0.45);
 
$grade = '';
if ($nilai_akhir >= 90) {
    $grade = 'A';
} elseif ($nilai_akhir >= 80) {
    $grade = 'B';
} elseif ($nilai_akhir >= 70) {
    $grade = 'C';
} elseif ($nilai_akhir >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}
 
 
echo "<br>Nis : $nis<br>";
echo "Nama : $nama<br>";
echo "N. Tugas : $tugas<br>";
echo "N. UTS : $uts<br>"; 
echo "N. UAS : $uas<br>";
echo "N. Akhir : $nilai_akhir<br>";
echo "N. Huruf : $grade<br>";
?>
 
</body>
</html>