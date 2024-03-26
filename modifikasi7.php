<!DOCTYPE html>
<html>
<head>
    <title>Tanggalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .date-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="date-container">
        <h2>Format Tanggal dan Waktu</h2>
        <?php
        echo "<p>m-F-Y, g:i:s a</p>";
        echo "<p>" . date("m-F-Y, g:i:s a") . "</p>";
    ?>
    </div>

    <div class="date-container">
        <h2>Format Tanggal Lengkap</h2>
        <?php
        echo "<p>l, j F Y</p>";
        echo "<p>" . date("l, j F Y") . "</p>";
    ?>
    </div>

    <div class="date-container">
        <h2>Format Waktu 12 Jam</h2>
        <?php
        echo "<p>h:i:s A</p>";
        echo "<p>" . date("h:i:s A") . "</p>";
    ?>
    </div>

    <div class="date-container">
        <h2>Format Waktu 24 Jam</h2>
        <?php
        echo "<p>H:i:s</p>";
        echo "<p>" . date("H:i:s") . "</p>";
    ?>
    </div>
</body>
</html>