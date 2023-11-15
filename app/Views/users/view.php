<?= $this->extend('layouts/primary') ?>

<?= $this->section('content') ?>
<table>
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>

    <tr>
        <td><?= $data['nama'] ?> </td>
        <td><?= $data['email'] ?> </td>
        <td><?= $data['alamat'] ?> </td>
        <td>
            <form method="post" action="/users/delete/<?= $data['id'] ?>">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" onclick="return confirm(' kamu akan menghapuskan data ini')"> Hapus</button>
            </form>
            <a href="/users/edit/<?= $data['id'] ?>"> Ubah </a>
        </td>
    </tr>
</table>
<?= $this->endSection() ?>