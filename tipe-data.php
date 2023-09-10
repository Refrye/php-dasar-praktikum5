<?php
$nama = 'faisal';
$alamat = "jl.bali";
$umur = 23;
$tinggi = 170;
$berat = 78.5;
$sudah_menikah = 0;
$hobi = ["membaca", "menulis", "berenang"];
$pekerjaan = "pelajar";
$orang = new stdClass();
$orang->nama = "faisal ridhani";
$orang->umur = 25;

$koneksi = mysqli_connect("localhost", "root", "", "belajar-php");

echo "Nama: $nama";
echo "<br>";
echo "Alamat: $alamat";
echo "<br>";
echo "Umur: $umur tahun";
echo "<br>";
echo "Tinggi: $tinggi cm";
echo "<br>";
echo "Berat: $berat kg";
echo "<br>";
echo "Sudah menikah: $sudah_menikah";
var_dump($sudah_menikah);
echo "<br>";
echo "Hobi: ";

$hobiStr = implode(", ", $hobi);

foreach ($hobi as $item) {
echo " * $item";
}
echo "<br>";
echo "Pekerjaan: $pekerjaan";
var_dump($pekerjaan);

$query = "INSERT INTO orang (nama, alamat, umur, tinggi, berat, sudah_menikah, hobi, pekerjaan) VALUES ('$nama', '$alamat', $umur, $tinggi, $berat, $sudah_menikah, '$hobiStr', '$pekerjaan')";

echo "<br>";
echo "Koneksi: ";
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}