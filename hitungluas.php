<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Persegi Panjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input[type=number] {
            width: 100px;
        }
    </style>
</head>
<body>
    <h2>Hitung Luas Persegi Panjang</h2>
    <form method="post">
        <label>Panjang (cm):</label>
        <input type="number" name="panjang" required><br><br>
        <label>Lebar (cm):</label>
        <input type="number" name="lebar" required><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $luas = $panjang * $lebar;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Panjang: " . $panjang . " cm<br>";
        echo "Lebar: " . $lebar . " cm<br>";
        echo "Luas Persegi Panjang: " . $luas . " cm<sup>2</sup>";
    }
    ?>
</body>
</html>