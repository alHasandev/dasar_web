<!-- menampilkan table -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- menampilkan data dari table database menggunakan php foreach -->
        <?php $no = 1; ?>
        <?php foreach ($hasil as $data) : ?>

            <tr>
                <td><?= $no; ?></td>
            </tr>

            <?php $no++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- akhir dari table -->