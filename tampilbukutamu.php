<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "daftartamu");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel bukutamu
$sql = "SELECT * FROM bukutamu";
$result = $conn->query($sql);

echo "<div style='text-align: center;'>";
echo "<h2 style='margin-bottom: 30px;'>DAFTAR BUKU TAMU</h2>";

// Tampilkan data
if ($result->num_rows > 0) {
    echo "<table border='1' style='width: 80%; margin: 0 auto; border-collapse: collapse;'>";
    echo "<tr style='background-color: #009879; color: white;'>
            <th style='padding: 10px;'>NO</th>
            <th style='padding: 10px;'>Nama</th>
            <th style='padding: 10px;'>Email</th>
            <th style='padding: 10px;'>Pesan</th>
          </tr>";
    
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='text-align: center;'>
                <td style='padding: 8px;'>" . $no . "</td>
                <td style='padding: 8px;'>" . $row['nama'] . "</td>
                <td style='padding: 8px;'>" . $row['email'] . "</td>
                <td style='padding: 8px;'>" . $row['pesan'] . "</td>
              </tr>";
        $no++;
    }
    echo "</table>";
    echo "<p style='text-align: left; width: 80%; margin: 10px auto;'>Jumlah Record: " . $result->num_rows . "</p>";
} else {
    echo "Tidak ada data.";
}

echo "<p class='footer'>Copyright 2021</p>";
echo "</div>";

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
        font-weight: bold;
    }

    h3 {
        font-size: 20px;
        font-weight: bold;
    }

    table {
        border: 1px solid black;
    }

    th, td {
        border: 1px solid black;
    }

    .footer {
        margin-top: 20px;
        font-size: 14px;
        color: #555;
    }
</style>