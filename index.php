<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UAS Semester 3</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #3498db; /* Ubah ke warna biru */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 600px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        .button-container {
            display: flex;
            flex-direction: row; /* Mengatur arah fleks ke baris */
            justify-content: center;
            margin-top: 30px;
        }

        .action-button {
            background-color: #000; /* Warna hitam */
            color: #fff; /* Warna teks putih */
            padding: 15px 30px;
            margin: 10px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .action-button:hover {
            background-color: #3498db; /* Warna biru saat tombol dihover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tugas UAS Semester 3 (MIRNAWATI)</h1>

    <div class="button-container">
        <a href="input_mahasiswa.php" class="action-button">Input Mahasiswa</a>
        <a href="input_matkul.php" class="action-button">Input Mata Kuliah</a>
        <a href="input_sks.php" class="action-button">Input SKS</a>
        <a href="review.php" class="action-button">Tampilkan Data Mahasiswa</a>
    </div>
</div>

</body>
</html>
