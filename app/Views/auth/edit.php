<?= $this->extend('layouts/primary') ?>

<?= $this->section('content') ?>
<?= (session()->getFlashdata('pesan')) ?? "" ?>
<form method="post" action="/users/update/<?= $user['id'] ?>">
    <?= csrf_field() ?>Nama:
    <input type="text" name="nama" id="nama" value="<?= $user['nama'] ?>"><br />Email:
    <input type="email" name="email" id="email" value="<?= $user['email'] ?>"><br />Alamat:
    <input type="text" name="alamat" id="alamat" value="<?= $user['alamat'] ?>"><br />
    <input type="submit" value="Ubah Data">
</form>
<?= $this->endSection() ?>