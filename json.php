<?php

// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'form_data');

// Ambil data dari tabel
$query = "SELECT * FROM data";
$result = mysqli_query($conn, $query);

// Buat array untuk menyimpan data
$data = array();

// Iterasi setiap baris data
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Encode array menjadi JSON dan tampilkan
echo json_encode($data);

// Tutup koneksi
mysqli_close($conn);

?>