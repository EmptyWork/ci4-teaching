<?= $this->extend('layouts/primary') ?>

<?= $this->section('judul') ?>
Ini dari /about
<?= $this->endSection() ?>

<?= $this->section('isi') ?>
<h1>Hello ini file index1_layouting</h1>
<?= $this->endSection() ?>

<?= $this->section('jskustom') ?>
<script>
    alert('ini dari halaman /about')
</script>
<?= $this->endSection() ?>