<?= $this->extend('layouts/primary') ?>

<?= $this->section('content') ?>
<main>
    <?= (session()->getFlashdata('pesan')) ?? "" ?>
    <h1>Form pembuatan Pengguna baru</h1>
    <form method="post">
        <?= csrf_field() ?>
        <input type="text" name="nama" id="nama" placeholder="Nama kamu" value="<?= old('nama') ?? "" ?>">
        <input type="email" name="email" id="email" placeholder="Alamat email kamu" value="<?= old('email') ?? "" ?>">
        <input type="text" name="alamat" id="alamat" placeholder="Alamat rumah kamu" value="<?= old('alamat') ?? "" ?>">
        <input type="submit" value="Buat Pengguna Baru">
    </form>
</main>
<?= $this->endSection() ?>