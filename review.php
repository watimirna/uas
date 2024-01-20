<?php
// File: display_data.php

// Konfigurasi database
$host = 'localhost';
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda
$dbname = 'uas';

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menggabungkan data dari tabel mahasiswa, matkul, dan sks
$query = "SELECT mahasiswa.nama AS nama_mhs, matkul.nama AS nama_matkul, sks.jml_sks 
          FROM mahasiswa
          INNER JOIN sks ON mahasiswa.id_sks = sks.id_sks
          INNER JOIN matkul ON sks.id_sks = matkul.id_sks";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 800px; /* Set max-width for larger screens */
            width: 90%; /* Set width for smaller screens */
            margin: auto;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        /* Media queries for responsive design */
        @media screen and (max-width: 600px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Cek hasil query
    if ($result) {
        echo "<h2>Daftar Mahasiswa, Mata Kuliah, dan Jumlah SKS</h2>";
        echo "<table>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Jumlah SKS</th>
                </tr>";

        // Tampilkan hasil query
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['nama_mhs'] . "</td>
                    <td>" . $row['nama_matkul'] . "</td>
                    <td>" . $row['jml_sks'] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    ?>
</div>

</body>
</html>

<?php
// Tutup koneksi database
mysqli_close($conn);
?>
