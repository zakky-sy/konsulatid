<?= $this->extend('profiles/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User List</h1>
  <div class="row">
    <div class="col">
      <table class="table table-hover">
        <thead class="text-center">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
          <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $user->username; ?></td>
            <td><?= $user->email; ?></td>
            <td class="text-center"><?= $user->name; ?></td>
            <td class="text-center">
              <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-primary">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>