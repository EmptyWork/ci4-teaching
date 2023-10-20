<!doctype html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter4</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;900&family=Young+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="javascript:history.back()">← kembali</a>
    </header>
    <nav>
        <ul>
            <li>
                <a href="/">Beranda</a>
            </li>
            <li>
                <a href="/about">Tentang Kami</a>
            </li>
            <li>
                <a href="/about/contact/phone/1202022">Hubungi Kami</a>
            </li>
        </ul>
    </nav>

    <?= $this->renderSection('content') ?>

    <footer>
        Copyright (c) 2023 EmptyWork at <a href="mailto:contact@emptywork.my.id">contact@emptywork.my.id</a>
    </footer>
</body>

</html>