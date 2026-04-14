<div class="container-fluid">
<h3 class="mb-4">Edit Data Anggota</h3>

<form method="post" action="<?= site_url('anggota/update/'.$anggota->id_anggota); ?>">

<div class="form-group">
    <label>Nomor Anggota</label>
    <input type="text" name="nomor_anggota" value="<?= $anggota->nomor_anggota; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $anggota->nama; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"><?= $anggota->alamat; ?></textarea>
</div>

<div class="form-group">
    <label>Telepon</label>
    <input type="text" name="telepon" value="<?= $anggota->telepon; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" value="<?= $anggota->email; ?>" class="form-control">
</div>

<div class="form-group">
    <label>Tanggal Daftar</label>
    <input type="date" name="tanggal_daftar" value="<?= $anggota->tanggal_daftar; ?>" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= site_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>
</form>
</div>