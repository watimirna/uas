<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mata Kuliah</title>
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
            max-width: 600px; /* Set max-width for larger screens */
            width: 90%; /* Set width for smaller screens */
            margin: auto;
        }

        h2 {
            color: #333;
        }

        form {
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

        /* Media queries for responsive design */
        @media screen and (max-width: 600px) {
            form {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Input Mata Kuliah</h2>

    <form action="input_matkul.php" method="post">
        <label for="nama_matkul">Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" required>

        <label for="id_sks">Jumlah SKS:</label>
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
