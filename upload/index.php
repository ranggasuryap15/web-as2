<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" method="post">
        Pilih File : <input type="file" name="berkas">
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    $namaFile = $_FILES['berkas']['name'];
    $nameTemp = $_FILES['berkas']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = 'upload/';

    // memindahkan file
    $terupload = move_uploaded_file($nameTemp, $dirUpload.$namaFile);

    if ($terupload)
    {
        echo "Upload Berhasil!<br>";
    } else {
        echo "Upload Gagal";
    }
    ?>
</body>
</html>