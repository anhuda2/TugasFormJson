<?php

// Menghubungkan ke database
$db = mysqli_connect("localhost", "root", "", "form_data");

// Mengecek apakah terhubung atau tidak
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke database: " . mysqli_connect_error();
}

// Mengambil data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$asal = $_POST['asal'];
$jenkel = $_POST['jenkel'];
$wali = $_POST['wali'];
$pendidikan = $_POST['pendidikan'];
$email = $_POST['email'];

// Menyimpan data ke dalam tabel
$sql = "INSERT INTO data (nama, alamat, asal, jenkel, wali, pendidikan, email)
VALUES ('$nama', '$alamat', '$asal', '$jenkel', '$wali', '$pendidikan', '$email')";

if (mysqli_query($db, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>