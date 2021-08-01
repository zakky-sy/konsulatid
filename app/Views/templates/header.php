<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto">
        <a href="<?= base_url('/'); ?>" class="logo mr-auto">
          <img src="assets/img/logo_v2.png" alt="" class="img-fluid">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a> -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?= ($active == "home") ? "active" : ""; ?>"><a href="<?= base_url('/'); ?>">Beranda</a></li>
          <li class="drop-down <?= ($active == "about") ? "active" : ""; ?>"><a href="<?= base_url('/about'); ?>">Tentang</a>
            <ul>
              <li><a href="<?= base_url('/about'); ?>">Tentang Kami</a></li>
              <li><a href="<?= base_url('/team'); ?>">Tim Kami</a></li>
              <li><a href="<?= base_url('/testimonials'); ?>">Testimoni</a></li>
            </ul>
          </li>
          <li class="<?= ($active == "services") ? "active" : ""; ?>"><a href="<?= base_url('/services'); ?>">Layanan</a></li>
          <li class="<?= ($active == "portfolio") ? "active" : ""; ?>"><a href="<?= base_url('/portfolio'); ?>">Portfolio</a></li>
          <li class="<?= ($active == "pricing") ? "active" : ""; ?>"><a href="<?= base_url('/pricing'); ?>">Harga</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li class="<?= ($active == "contact") ? "active" : ""; ?>"><a href="<?= base_url('/contact'); ?>">Hubungi Kami</a></li>
          <li class="drop-down timpa ml-4">
            <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-3 d-none d-lg-inline"><?= user()->username; ?></span>
              <img class="img-profile rounded-circle" src="<?= base_url(); ?>/profiles/img/<?= user()->user_image; ?>" />
            </a>
            <!-- Dropdown - User Information -->
            <ul>
              <li>
                <a href="<?= base_url('user'); ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil Saya
                </a>
              </li>
              <li>
              <a href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Keluar
              </a>
              </li>
              </ul>  
            </div>
          </li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>