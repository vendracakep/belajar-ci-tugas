<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Diskon</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Diskon</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Diskon
        <button class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Data</button>
      </h5>

      <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger">
          <?= implode('<br>', session()->getFlashdata('errors')); ?>
        </div>
      <?php endif; ?>

      <table class="table table-bordered" id="datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Nominal (Rp)</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($diskon as $i => $row) : ?>
            <tr>
              <td><?= $i + 1 ?></td>
              <td><?= $row['tanggal'] ?></td>
              <td><?= number_format($row['nominal']) ?></td>
              <td>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Ubah</button>
                <a href="<?= base_url('diskon/delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
              </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1">
              <div class="modal-dialog">
                <form method="post" action="<?= base_url('diskon/update/' . $row['id']) ?>" class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" class="form-control" value="<?= $row['tanggal'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label>Diskon (Rp)</label>
                      <input type="number" name="nominal" class="form-control" value="<?= $row['nominal'] ?>" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('diskon/create') ?>" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label>Tanggal</label>
          <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Diskon (Rp)</label>
          <input type="number" name="nominal" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>