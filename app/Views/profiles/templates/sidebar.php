<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
    <div class="sidebar-brand-icon">
    <!-- <i class="fab fa-pied-piper-square"></i> -->
    <img src="<?= base_url(); ?>/profiles/img/logo_v2.1.png" alt="" class="img-fluid">
    </div>
    <div class="sidebar-brand-text mx-3">KONSULAT.ID</div>
  </a>

  <?php if (in_groups('admin')) : ?>
  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Manajemen User</div>

  <!-- Nav Item - My Profile -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
      <i class="fas fa-users"></i>
      <span>Daftar User</span>
    </a>
  </li>
  <?php endIf; ?>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Profil</div>

  <!-- Nav Item - My Profile -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
      <i class="fas fa-user"></i>
      <span>Profil Saya</span>
    </a>
  </li>

  <!-- Nav Item - Edit Profile -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/edit'); ?>">
      <i class="fas fa-user-edit"></i>
      <span>Edit Profil</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Nav Item - Logout -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt"></i>
      <span>Keluar</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
