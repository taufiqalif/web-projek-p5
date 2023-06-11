<?= $this->extend('dashboard/layouts/halaman'); ?>

<?= $this->section('isi'); ?>


<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Penilaian Siswa Projek <?= $projek; ?></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h2 class="m-0 font-weight-bold text-center">Gaya Hidup Berkelanjutan</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIS</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Nilai 01</th>
              <th scope="col">Nilai 02</th>
              <th scope="col">Nilai 03</th>
              <th scope="col">Nilao 04</th>
              <th scope="col">Nilai 05</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>123456789</td>
              <td>Asep Saepuloh</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>
                <a class="btn btn-primary btn-sm" href="#" role="button">Nilai</a>
                <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>