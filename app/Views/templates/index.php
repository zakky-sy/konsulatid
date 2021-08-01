<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KONSULAT.ID</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/logo_v2.png" class="text-info" rel="icon">
  <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/profiles/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" /> 
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
  <!-- <link href="<?= base_url(); ?>/profiles/css/sb-admin-2.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?= $this->include('templates/header'); ?>
  <!-- End Header -->

  <!-- ======= Main ======= -->
  <?= $this->renderSection('content'); ?>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?= $this->include('templates/footer'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Logout Modal-->
  <div class="modal hide fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Pilih tombol "Keluar" dibawah jika anda ingin mengakhiri sesi saat ini.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Batal
          </button>
          <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Keluar</a>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Services Modal -->
  <div class="modal fade" id="konsul" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="konsulLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="konsulLabel">Konsultasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/1.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>Layanan konsultais strategi marketing yang tepat untuk produk / jasa anda dengan marketing agency yang terpercaya dan sudah berpengalaman.<br><br>Dengan strategi marketing iklan dan alur order yang tepat di social media, maka pelanggan potensial akan lebih mudah dikonversi.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="sme" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="smeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="smeLabel">Social Media Engagement</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/2.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>SME (Social Media Engagement) merupakan Cara Growth Hack terkini untuk meningkatkan value akun Social Media. Membuat calon pengguna/pelanggan anda percaya akan Brand anda di Social Media.<br><br>Dengan meningkatkan interaksi seperti jumlah Followers, Likes, dan Views pada akun Social Media tentunya akan menumbuhkan kepercayaan konsumen dan interaksi yang organik.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="branding" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="brandingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="brandingLabel">Branding & Design</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/3.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>Layanan ini akan membantu anda dalam pembuatan desain grafis dan konten khususnya untuk Social Media. Anda akan menghemat banyak biaya dan waktu dibanding harus menghire atau mengelola Desainer sendiri.<br><br>Dikerjakan oleh desainer profesional yang akan membuat desain sesuai permintaan anda dan perkembangan terkini.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="campaign" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="campaignLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="campaignLabel">Digital Campaign</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/4.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>Solusi iklan online / digital campaign & advertising dengan marketing agency yang terpercaya dan sudah berpengalaman membuat campaign yang sukses.<br><br>Iklan Online atau Digital Advertising adalah salah satu cara yang harus dilakukan oleh setiap bisnis yang ingin memasarkan produk / layanannya, karena sebagus apapun produknya tanpa adanya iklan / marketing yang dilakukan maka tidak akan ada pembelian.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="websolution" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="websolutionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="websolutionLabel">Website Solution</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/6.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>Solusi all-in-one untuk kebutuhan website Anda. Mulai dari development, pembuatan konten, maintenance web, hingga promosi web (SEO, Google Adwords, dll). <br><br>Kami menyediakan layanan yang dikhususkan untuk UMKM atau bisnis kecil dengan harga yang terjangkau namun tetap berkualitas.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="smm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="smmLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="smmLabel">Social Media Management</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= base_url(); ?>/assets/img/service/5.png" alt="">
            </div>
            <div class="col-md-6 my-auto">
              <p>Dengan Social Media Anda dapat menentukan siapa saja calon konsumen yang akan melihat konten promosi di Social Media agar sesuai dengan tujuan.<br><br>Dengan melakukan manajemen social media yang tepat, value dari brand Anda akan meningkat diiringi dengan Brand Awareness yang bagus.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="<?= base_url('pricing'); ?>">
              <input type="submit" class="btn btn-info" value="Lihat Harga" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal -->
  <div class="modal fade" id="greennitrogen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="greennitrogenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/green-nitrogen/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/green-nitrogen/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/green-nitrogen/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Web development</li>
                    <li><strong>Klien</strong>: PT Global Insight Utama</li>
                    <li><strong>Tanggal Proyek</strong>: 01 Maret, 2021</li>
                    <li><strong>URL Proyek</strong>: <a href="www.green-nitrogen.com">www.green-nitrogen.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>Green Nitrogen</h2>
                <p>
                  Website Company Profile Green Nitrogan adalah perusahaan bergerak di bidang Jasa penjualan angin Nitrogen di Pom - Pom bensin . Fitur - Fitur Website adalah Info Peta Jaringan Outlet, Info Berita, Info Award, Info Promo, Info Garansi dan Asuransi, Layanan Produk, Car Wash, Profil, Member dan Recruitment. Dibuat agar Perusahaan Green Nitrogen dikenal banyak orang dan lebih profesional.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="newhongkong" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newhongkongLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/new-hongkong/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/new-hongkong/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/new-hongkong/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Web development</li>
                    <li><strong>Klien</strong>: New Hongkong Restaurant Malang</li>
                    <li><strong>Tanggal Proyek</strong>: 23 November, 2020</li>
                    <li><strong>URL Proyek</strong>: <a href="new-hongkongrestaurant.com">new-hongkongrestaurant.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>New Hongkong Restaurant</h2>
                <p>
                Website Company Profile New Hongkong Restaurant merupakan website untuk memperkenalkan makanan-makanan , Service dan Fasilitas yang disediakan di restaurant tersebut , dan berikut fitur - fitur website Dinamis Slider, Info Fasilitas, Info Menu Makanan, Info Menu Layanan, Info Menu Promo Restaurant, Gallery New Hongkong, Testimoni New Hongkong, Kontak Pengaduan Layanan.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="wisata" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="wisataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/wisata/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/wisata/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/wisata/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Web development</li>
                    <li><strong>Klien</strong>: Wisata Batu Malang</li>
                    <li><strong>Tanggal Proyek</strong>: 09 September, 2020</li>
                    <li><strong>URL Proyek</strong>: <a href="wisata-batumalang.com">wisata-batumalang.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>Wisata Batu Malang</h2>
                <p>
                  Website Tour & Travel wisata batu malang merupakan website commercial Tour & Travel yang memberikan pelayanan dan fasilitas jasa traveling, meeting, convention, exhibition, company gathering ataupun company outing ke berbagai destinasi wisata di Batu Malang yang dapat menyesuaikan dengan anggaran dan kebutuhan lnstansi anda baik B2B (Business to Business) maupun B2G (Business to Government).
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="zijab" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="zijabLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/zijab/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/zijab/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/zijab/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Social Media Management</li>
                    <li><strong>Klien</strong>: Zijab.id</li>
                    <li><strong>Tanggal Proyek</strong>: 20 Oktober, 2020</li>
                    <li><strong>URL Proyek</strong>: <a href="www.instagram.com/zijab.id">www.instagram.com/zijab.id</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>Zijab.id</h2>
                <p>
                  Akun instagram Zijab.id berisi konten-konten yang mampu mempresentasikan apa itu Zijab.id yang secara perlahan mampu meningkatkan kesadaran akan brand dari Zijab.id di media sosial. Sehingga mampu membuat brand awareness menjadi tinggi dan hal ini akan membuat bisnis menjadi lebih mudah tumbuh. Dan konten yang diunggah di akun media sosial dapat menarik minat dan daya beli masyarakat.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="medika" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="medikaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/medika/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/medika/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/medika/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Social Media Management</li>
                    <li><strong>Klien</strong>: its'Medika</li>
                    <li><strong>Tanggal Proyek</strong>: 31 Desember, 2020</li>
                    <li><strong>URL Proyek</strong>: <a href="www.instagram.com/itsmedika.id">www.instagram.com/itsmedika.id</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>its'Medika</h2>
                <p>
                  its'Medika menyadari bahwa pengguna media sosial di Indonesia sudah sangat banyak sehingga menjadi target pasar yang sangat luas. Ketika perusahaan membuat akun media sosial maka secara langsung memperkenalkan perusahaan secara luas. Apalagi jika akun dikelola dengan baik maka akan semakin meningkatkan kepercayaan masyarakat hanya dari media sosial. Masyarakat menjadi lebih tertarik dengan kualitas dan jati diri dari perusahaan tersebut.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="andalusia" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="andalusiaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
              <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                  <img src="assets/img/portfolio/andalusia/portfolio-details-1.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/andalusia/portfolio-details-2.png" class="img-fluid" alt="">
                  <img src="assets/img/portfolio/andalusia/portfolio-details-3.png" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h3>Informasi Proyek</h3>
                  <ul>
                    <li><strong>Kategori</strong>: Social Media Management</li>
                    <li><strong>Klien</strong>: Andalusia Property</li>
                    <li><strong>Tanggal Proyek</strong>: 14 Februari, 2021</li>
                    <li><strong>URL Proyek</strong>: <a href="www.instagram.com/andalusiapropertyid">www.instagram.com/andalusiapropertyid</a></li>
                  </ul>
                </div>
              </div>
              <div class="portfolio-description">
                <h2>Andalusia Property</h2>
                <p>
                  Masyarakat sekarang sudah paham betul kalau setiap perusahaan atau toko memiliki presensi sendiri di akun media sosial. Sehingga Andalusia Property mempromosikan produknya dengan mengunggahnya di sosial media untuk dapatkan target pasar lebih luas. Apalagi promosi dengan menggunakan media sosial jauh lebih murah, praktis dan hemat tenaga. Hal ini secara langsung mampu meningkatkan penjualan dan berbagai keuntungan lain pasti mengikuti.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- Pricing Modal -->
  <div class="modal hide fade" id="beli" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-labelledby="beliLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="beliLabel">Yakin beli paket ini?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Pilih tombol "Bayar" dibawah untuk melanjutkan ke pembayaran.
          Pilih tombol "Tanya" dibawah jika anda ingin tanya-tanya dulu.
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=6285546343278&text=Halo%20KONSULATID" target="blank_">Tanya</a>
          <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#bayar">
            Bayar
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal hide fade" id="bayar" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-labelledby="bayarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bayarLabel">Metode Pembayaran</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              BRI <br>
              BCA <br>
              BNI <br>
              CIMB <br>
              OVO <br>
              GOPAY <br>
            </div>
            <div class="col text-right">
              341901039637539 <br>
              0111943523 <br>
              0977857930 <br>
              706006457400 <br>
              085546343278 <br>
              085546343278 <br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" data-dismiss="modal">Selesai</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>

  <!-- Kirim pesan -->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbx1m3mNuzgQ_XVbvDTxyR4kwwulCEErAaQx9UcZADLTbodNe8igZZq4ootC87sBRHH0/exec'
    const form = document.forms['konsulatid-contact-form']
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', e => {
      e.preventDefault()
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then((response) => {
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          myAlert.classList.toggle('d-none');
          form.reset();
          console.log('Success!', response);
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>

</body>

</html>