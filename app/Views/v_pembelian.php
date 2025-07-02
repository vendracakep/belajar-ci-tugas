<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Pembelian</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Pembelian</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Pembelian</h5>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Waktu Pembelian</th>
            <th>Total Bayar</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pembelian as $i => $row) : ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['username'] ?></td>
              <td><?= $row['created_at'] ?></td>
              <td>IDR <?= number_format($row['total_harga']) ?></td>
              <td><?= $row['alamat'] ?></td>
              <td>
                <?php if ($row['status'] == 1): ?>
                  <span class="badge bg-success">Sudah Selesai</span>
                <?php else: ?>
                  <span class="badge bg-danger">Belum Selesai</span>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= base_url('pembelian/ubah/' . $row['id']) ?>" class="btn btn-warning btn-sm">Ubah Status</a>
                <a href="#" class="btn btn-success btn-sm">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</section>

<?= $this->endSection() ?>