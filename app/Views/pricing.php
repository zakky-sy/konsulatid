<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Harga</h2>
      <ol>
        <li><a href="<?= base_url('/'); ?>">Beranda</a></li>
        <li>Harga</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="row mb-5">

      <div class="section-title col-12">
        <h2>Jasa Pengiklanan</h2>
      </div>

      <div class="col-lg-6 col-md-6">
        <div class="box">
          <h3>Starter</h3>
          <h4><sup>Rp</sup>200k<span> / bulan</span></h4>
          <ul>
            <li>Setup iklan</li>
            <li>Research</li>
            <li>Planning</li>
            <li class="na">Konten</li>
            <li class="na">Konsultasi</li>
          </ul>
          <div class="btn-wrap">
            <a class="btn-buy" data-toggle="modal" data-target="#beli">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
        <div class="box">
          <span class="advanced">Best Seller</span>
          <h3>Grow</h3>
          <h4><sup>Rp</sup>400k<span> / bulan</span></h4>
          <ul>
            <li>Setup iklan</li>
            <li>Research</li>
            <li>Planning</li>
            <li>Konten</li>
            <li>Konsultasi</li>
          </ul>
          <div class="btn-wrap">
            <a class="btn-buy" data-toggle="modal" data-target="#beli">Beli</a>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-lg-4 mt-5">

      <div class="section-title col-12">
        <h2>Jasa Website</h2>
      </div>

      <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
        <div class="box">
          <h3>Silver</h3>
          <h4><sup>Rp</sup>1000k</h4>
          <ul>
            <li>Gratis domain</li>
            <li>4 responsive page</li>
            <li>20 foto & 2 video</li>
            <li>Gratis SSL</li>
            <li>2x Maintenance</li>
          </ul>
          <div class="btn-wrap">
            <a class="btn-buy" data-toggle="modal" data-target="#beli">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
        <div class="box">
          <h3>Gold</h3>
          <h4><sup>Rp</sup>1500k</h4>
          <ul>
            <li>Gratis domain</li>
            <li>7 responsive page</li>
            <li>40 foto & 4 video</li>
            <li>Gratis SSL</li>
            <li>4x Maintenance</li>
          </ul>
          <div class="btn-wrap">
            <a class="btn-buy" data-toggle="modal" data-target="#beli">Beli</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
        <div class="box">
          <span class="advanced">Best Seller</span>
          <h3>Diamond</h3>
          <h4><sup>Rp</sup>2000k</h4>
          <ul>
            <li>Gratis domain</li>
            <li>10 responsive page</li>
            <li>80 foto & 8 video</li>
            <li>Gratis SSL</li>
            <li>Unlimited Maintenance</li>
          </ul>
          <div class="btn-wrap">
            <a class="btn-buy" data-toggle="modal" data-target="#beli">Beli</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Pricing Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up">
          <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Bagaimana cara memesan untuk pertama kali? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
            <p>
              Untuk kamu yang pertama kali bergabung kamu harus mendaftar & membuat akun terlebih dahulu, kemudian jika kamu sudah memiliki akun kamu tinggal login dan melihat syarat & ketentuan layanan kemudian tinggal pilih deh..paket yang sesuai dengan bisnis kamu. <i class="fas fa-smile"></i> 
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Bagaimana saya menghubungi jika ada kendala? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-parent=".faq-list">
            <p>
              Kamu bisa menghubungi cutomer service kami ya kak, melalui whatsapp dan email.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Mendapatkan Diskon & Promo? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-parent=".faq-list">
            <p>
              Untuk berlangganan informasi diskon & promo kamu bisa berlangganan email ke kami ya kak. Note : nggak usah khawatir kak, kami gak bakalan spam kok hehehe  
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Bagaiamana proses konsultasinya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-parent=".faq-list">
            <p>
              Untuk pelanggan atau client yang sudah membeli paket di KONSULAT.ID dapat bertemu dengan konsultan secara langsung maupun daring sesuai dengan perjanjian antar keduanya.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Bgaimana cara perpanjang masa aktif layanan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-parent=".faq-list">
            <p>
              Untuk memperpanjang paket layanan kami kakak tinggal melakukan pembelian ulang seperti sebelumnya ya kak.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>