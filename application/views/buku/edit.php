<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Buku</h3>

    <form method="post">

        <div class="form-group">
            <label>Kode Buku</label>
            <input type="text" name="kode_buku" class="form-control"
                value="<?= $buku->kode_buku ?>" required>
        </div>

        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control"
                value="<?= $buku->judul ?>" required>
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control"
                value="<?= $buku->penulis ?>">
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control"
                value="<?= $buku->penerbit ?>">
        </div>

        <div class="form-group">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control"
                value="<?= $buku->tahun ?>">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <?php foreach($kategori as $k): ?>
                    <option value="<?= $k->id ?>"
                        <?= $k->id == $buku->kategori_id ? 'selected' : '' ?>>
                        <?= $k->nama_kategori ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control"
                value="<?= $buku->stok ?>">
        </div>

        <div class="form-group">
            <label>Lokasi Rak</label>
            <input type="text" name="lokasi_rak" class="form-control"
                value="<?= $buku->lokasi_rak ?>">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= site_url('buku') ?>" class="btn btn-secondary">Kembali</a>

    </form>
</div>

</body>
</html>