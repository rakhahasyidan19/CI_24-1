<!DOCTYPE html>
<html>
<head>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Buku</h3>

    <form method="post">
        <input type="text" name="kode_buku" class="form-control mb-2" placeholder="Kode Buku" required>
        <input type="text" name="judul" class="form-control mb-2" placeholder="Judul Buku" required>
        <input type="text" name="penulis" class="form-control mb-2" placeholder="Penulis">
        <input type="text" name="penerbit" class="form-control mb-2" placeholder="Penerbit">
        <input type="number" name="tahun" class="form-control mb-2" placeholder="Tahun">

        <select name="kategori" class="form-control mb-2">
            <?php foreach($kategori as $k): ?>
                <option value="<?= $k->id ?>"><?= $k->nama_kategori ?></option>
            <?php endforeach; ?>
        </select>

        <input type="number" name="stok" class="form-control mb-2" placeholder="Stok">
        <input type="text" name="lokasi_rak" class="form-control mb-2" placeholder="Lokasi Rak">

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>

</body>
</html>