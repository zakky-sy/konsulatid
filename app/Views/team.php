<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Tim</h2>
        <ol>
          <li><a href="<?= base_url('/'); ?>">Beranda</a></li>
          <li>Tim</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2><strong>Tim</strong> Kami</h2>
        <p>KONSULAT.ID terdiri dari anggota dengan latar belakang dan pengalaman yang beragam, yang pastinya bertalenta dan profesional. Kami memiliki tujuan yang sama untuk menjadi katalisator antara bisnis dan digital.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="assets/img/team/team-1.png" class="img-fluid" alt="" />
              <div class="social">
                <a target="_blank" href="https://twitter.com/zakkisoffline"><i class="icofont-twitter"></i></a>
                <a target="_blank" href="https://web.facebook.com/profile.php?id=100010323720797"><i class="icofont-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/zzz.zzzzzz.z/"><i class="icofont-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/mochammad-fachrizal-muzakky-6b67801a7/"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>M. F. Muzakky</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-2.png" class="img-fluid" alt="" />
              <div class="social">
                <a target="_blank" href=""><i class="icofont-twitter"></i></a>
                <a target="_blank" href=""><i class="icofont-facebook"></i></a>
                <a target="_blank" href=""><i class="icofont-instagram"></i></a>
                <a target="_blank" href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Alfina Rosyida</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-3.png" class="img-fluid" alt="" />
              <div class="social">
                <a target="_blank" href="https://twitter.com/rickyalvianto1"><i class="icofont-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/ricky.alvianto.9"><i class="icofont-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/rickyoshi_al/"><i class="icofont-instagram"></i></a>
                <a target="_blank" href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Ricky Alvianto</h4>
              <span>CTO</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Team Section -->
</main>
<!-- End #main -->
<?= $this->endSection(); ?>
