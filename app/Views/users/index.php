<?= $this->extend('layouts/primary') ?>

<?= $this->section('content') ?>
<main>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        <?php if (count($semua_pengguna) > 0) {
            foreach ($semua_pengguna as $pengguna => $data) {
        ?>
                <tr>
                    <td><?= $data['nama'] ?> </td>
                    <td><?= $data['email'] ?> </td>
                    <td><?= $data['alamat'] ?> </td>
                    <td>
                        <form method="post" action="/users/delete/<?= $data['id'] ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm(' kamu akan menghapuskan data ini')"> Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="3"> Belum ada data </td>
            </tr>
        <?php
        } ?>
    </table>
</main>
<?= $this->endSection() ?>