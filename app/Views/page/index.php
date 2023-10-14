<?= $this->extend('layouts/primary') ?>

<?= $this->section('content') ?>
<main>
    <h1>
        Selamat datang di
        <em>landing page</em>
    </h1>
    <p>
        ini merupakan contoh halaman utama dari sebuah program, dibuat untuk menunjukan sebuah bentuk atau hasil tampilan yang di ambil menggunakan <code><span class="token">view</span><span class="semi">(</span><span class="string">'name'</span><span class="semi">)</span></code> pada sebuah <strong>controller</strong>.
    </p>
</main>
<?= $this->endSection() ?>