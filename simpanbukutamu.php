<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "daftartamu");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Simpan data ke tabel bukutamu
$sql = "INSERT INTO bukutamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<h2>Data berhasil disimpan.</h2>";
    echo "<br>";
    echo "<a href='tampilbukutamu.php' style='text-decoration: none; font-size: 18px; color: blue;'>Lihat Buku Tamu</a>";
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        font-size: 24px;
        color: green;
    }

    table {
        width: 80%;
        margin: 50px auto;
        border-collapse: collapse;
        text-align: center;
    }

    table, th, td {
        border: 1px solid black;
    }

    th {
        background-color: #009879;
        color: white;
        padding: 10px;
    }

    td {
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f3f3f3;
    }

    tr:nth-child(odd) {
        background-color: #e9e9e9;
    }

    .footer {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
        color: #555;
    }
</style>