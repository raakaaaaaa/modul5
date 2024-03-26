<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Biodata</h1>

    <?php
    // Data biodata
    $nama = "Fx.Raka Putra Adrianto";
    $tempatLahir = "Jogja";
    $tanggalLahir = "2004-02-16";
    $jenisKelamin = "Laki-laki";
    $agama = "Katholik";
    $alamat = "Sentolo kidul.Rt/Rw:10/20";
    $telepon = "08979194549";
    $email = "rakaaja.com";
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <td><?php echo $tempatLahir . ", " . date("d F Y", strtotime($tanggalLahir)); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $jenisKelamin; ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><?php echo $agama; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?php echo $telepon; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>