<?= $this->extend('layouts/primary') ?>



<?= $this->section('judul') ?>
Website Perdana saya
<?= $this->endSection() ?>

<?= $this->section('isi') ?>
<h1>Hello ini file index2_layouting</h1>
<?= $this->endSection() ?>

<?= $this->section('jskustom') ?>
    <script>alert('ini dari halaman awal')</script>
<?= $this->endSection() ?>