<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Hubungi Kami</h2>
      <ol>
        <li><a href="<?= base_url('/'); ?>">Beranda</a></li>
        <li>Hubungi Kami</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<div class="map-section">
  <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=stiki%20malang&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
  <div class="container">

    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Jl. Raya Tidar No. 100<br>Sukun, Malang 65146</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>cskonsulatid@gmail.com<br>konsulatid@gmail.com</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Telepon:</h4>
              <p>+62 855-4634-3278<br>+62 895-8033-00645</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="row mt-5 justify-content-center" data-aos="fade-up">
      <div class="col-lg-10">
      <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
        <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form class="php-email-form" name="konsulatid-contact-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Harus diisi" />
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Email tidak valid" />
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Harus diisi" />
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tulis sesuatu untuk kami" placeholder="Pesan"></textarea>
          </div>
          <div class="text-center"><button type="submit" class="btn-kirim">Kirim Pesan</button></div>
          <div class="text-center">
            <button type="button" class="btn-loading d-none" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Mengirim Pesan...
            </button>
          </div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>