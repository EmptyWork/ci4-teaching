<?= $this->extend('layouts/primary') ?>

<?= $this->Section("content") ?>
<main>
    <h1>
        Hubungi kami
    </h1>
    <p>
        Pada halaman ini bisa memuat segala keperluan untuk menambahkan <strong>data</strong> dan lain-lain.
    </p>
    <p>
        Parameters yang kamu kirimkan adalah <?= $metode_komunikasi ? "<code><span class=\"token\">data<span><span class=\"semi\">:</span><span class=\"string\">{$metode_komunikasi}</span></code>" : "<code><span class=\"string\">tidak ada</span></code>" ?> dan <?= $nomor_id ? "<code><span class=\"token\">data<span><span class=\"semi\">:</span><span class=\"string\">{$nomor_id}</span></code>" : "<code><span class=\"string\">tidak ada</span></code>" ?>;
    </p>
</main>

<?= $this->endSection('content') ?>