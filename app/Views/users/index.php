<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <h1>Tambahkan User Baru</h1>
        <input type="text" name="name" id="name" placeholder="Masukan Nama Anda" value="<?= old("name") ?>">
        <input type=" text" name="address" id="address" placeholder="Masukan Alamat Anda" value="<?= old("address") ?>">
        <input type="submit" value="Tambah Pengguna">
    </form>
</body>

</html>