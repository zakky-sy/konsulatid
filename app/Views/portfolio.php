<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portolio</h2>
      <ol>
        <li><a href="<?= base_url('/'); ?>">Beranda</a></li>
        <li>Portolio</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Digital Campaign</li>
          <li data-filter=".filter-card">Social Media</li>
          <li data-filter=".filter-web"> Website </li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Berrybenka Street</h4>
          <p>Digital Campaign</p>
          <a href="assets/img/portfolio/portfolio-1.png" data-gall="portfolioGallery" class="venobox preview-link" title="Berrybenka Street"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#berry"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-2.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Green Nitrogen</h4>
          <p>Company Profile Website</p>
          <a href="assets/img/portfolio/portfolio-2.png" data-gall="portfolioGallery" class="venobox preview-link" title="Green Nitrogen"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#greennitrogen"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-3.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Galvee Smart Home</h4>
          <p>Digital Campaign</p>
          <a href="assets/img/portfolio/portfolio-3.png" data-gall="portfolioGallery" class="venobox preview-link" title="Galvee Smart Home"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#galvee"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-4.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Zijab.id</h4>
          <p>Social Media Management</p>
          <a href="assets/img/portfolio/portfolio-4.png" data-gall="portfolioGallery" class="venobox preview-link" title="Zijab.id"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#zijab"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-5.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>New Hongkong Restaurant</h4>
          <p>Company Profile Website</p>
          <a href="assets/img/portfolio/portfolio-5.png" data-gall="portfolioGallery" class="venobox preview-link" title="New Hongkong Restaurant"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#newhongkong"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-6.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Bicara Sinema</h4>
          <p>Digital Campaign</p>
          <a href="assets/img/portfolio/portfolio-6.png" data-gall="portfolioGallery" class="venobox preview-link" title="Bicara Sinema"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#bicara"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-7.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>its'Medika</h4>
          <p>Social Media Management</p>
          <a href="assets/img/portfolio/portfolio-7.png" data-gall="portfolioGallery" class="venobox preview-link" title="its'Medika"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#medika"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-8.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Andalusia Property</h4>
          <p>Social Media Management</p>
          <a href="assets/img/portfolio/portfolio-8.png" data-gall="portfolioGallery" class="venobox preview-link" title="Andalusia Property"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#andalusia"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-9.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Wisata Batu Malang</h4>
          <p>Website Tour & Travel</p>
          <a href="assets/img/portfolio/portfolio-9.png" data-gall="portfolioGallery" class="venobox preview-link" title="Wisata Batu Malang"><i class="bx bx-plus"></i></a>
          <a href="" class="details-link" title="More Details" data-toggle="modal" data-target="#wisata"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>