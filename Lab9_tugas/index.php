<?php require('header.php'); ?>


<h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Nama Barang</th>
                <th>Gambar</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['gambar']; ?></td>
                    <td><?= $row['harga_beli']; ?></td>
                    <td><?= $row['harga_jual']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?= $row['id_barang']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php require('footer.php'); ?>