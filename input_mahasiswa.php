<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Input Mahasiswa</h2>

    <form action="input_mahasiswa.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="jk">Jenis Kelamin:</label>
        <select name="jk" required>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Aktif">Aktif</option>
            <option value="Cuti">Cuti</option>
            <option value="Drop Out">Drop Out</option>
        </select>

        <label for="id_sks">ID SKS:</label>
        <select name="id_sks" required>
            <?php
                // Populate dropdown with SKS options
                while ($sks_row = mysqli_fetch_assoc($sks_result)) {
                    echo "<option value='" . $sks_row['id_sks'] . "'>" . $sks_row['jml_sks'] . " SKS</option>";
                }
            ?>
        </select>

        <input type="submit" value="Simpan">
    </form>
</div>

</body>
</html>
