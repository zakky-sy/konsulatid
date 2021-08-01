<?= $this->extend('profiles/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Ubah Profil</h1>
  <div class="row">
    <div class="col">
      <form action="/user/update/<?= user()->id; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= user()->id; ?>">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fullname">Nama</label>
            <input type="text" class="form-control" id="fullname" name="fullname" autofocus value="<?= user()->fullname; ?>">
            <!-- <div class="invalid-feedback">
              <//?= $validation->getError('fullname'); ?>
            </div> -->
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= user()->email; ?>">
            <!-- <div class="invalid-feedback">
              <//?= $validation->getError('email'); ?>
            </div> -->
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
          <label for="umur">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="<?= user()->umur; ?>">
            <!-- <div class="invalid-feedback">
              <//?= $validation->getError('umur'); ?>
            </div> -->
          </div>
          <div class="form-group col-md-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
              <option selected disabled value="">Pilih...</option>
              <option value="Laki-laki" <?= (user()->jenis_kelamin == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
              <option value="Perempuan" <?= (user()->jenis_kelamin == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select>
            <!-- <div class="invalid-feedback">
              <//?= $validation->getError('jenis_kelamin'); ?>
            </div> -->
          </div>
          <div class="form-group col-md-6">
            <label for="telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= user()->telepon; ?>">
            <!-- <div class="invalid-feedback">
              <//?= $validation->getError('telepon'); ?>
            </div> -->
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= user()->alamat; ?>">
          <!-- <div class="invalid-feedback">
            <//?= $validation->getError('alamat'); ?>
          </div> -->
        </div>
        <button class="btn btn-primary" type="submit">Ubah Data</button>
        <a href="/user" class="btn btn-danger">Batal</a>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>