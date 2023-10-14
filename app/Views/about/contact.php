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
        Parameters yang kamu kirimkan adalah <?= $username ? "<code><span class=\"token\">data<span><span class=\"semi\">:</span><span class=\"string\">{$username}</span></code>" : "<code><span class=\"string\">tidak ada</span></code>" ?> dan <?= $phone ? "<code><span class=\"token\">data<span><span class=\"semi\">:</span><span class=\"string\">{$phone}</span></code>" : "<code><span class=\"string\">tidak ada</span></code>" ?>;
    </p>
</main>

<?= $this->endSection('content') ?>