<?= $this->extend('profiles/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profil Saya</h1>
  <div class="row">
    <div class="col">
      <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-2 p-4">
            <img src="<?= base_url('/profiles/img/' . user()->user_image); ?>" alt="<?= user()->username; ?>">
          </div>
          <div class="col-md-10 p-4">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4><?= user()->username; ?></h4>
                </li>
                <?php if (user()->fullname) : ?>
                <li class="list-group-item"><?= user()->fullname; ?></li>
                <?php endif; ?>
                <li class="list-group-item">
                  <?= user()->email; ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>