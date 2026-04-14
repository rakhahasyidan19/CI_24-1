<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<<<<<<< HEAD
    
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('anggota'); ?>">
    <div class="sidebar-brand-icon">
        <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Anggota CRUD</div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?= site_url('anggota'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('anggota'); ?>">
        <i class="fas fa-users"></i>
        <span>Data Anggota</span>
    </a>
</li>

<hr class="sidebar-divider d-none d-md-block">

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
=======

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">PERPUSTAKAAN</div>
    </a>

    <hr class="sidebar-divider">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('kategori') ?>">
            <i class="fas fa-folder"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- Buku -->
   <li class="<?= $this->uri->segment(1)=='buku' ? 'nav-item active' : 'nav-item' ?>">
    <a class="nav-link" href="<?= site_url('buku') ?>">
        <i class="fas fa-book"></i>
        <span>Buku</span>
    </a>
</li>

</ul>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
    <span class="ml-auto mr-3">Admin</span>
</nav>

<div class="container-fluid">
>>>>>>> 3f5d591215ca7c6f8eda799728b49684afc8bc4b
