<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DESA 4.0</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('auth/index'); ?>">BERANDA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">USAHA</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">PRODUK</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">GALERI</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">BERITA</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">GIS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('menu/kontak'); ?>">HUBUNGI KAMI</a>
      </li>
    </ul>
  </div>
  <a class="btn btn-secondary" href="<?= base_url('auth/login'); ?>">MASUK</a>
</nav>