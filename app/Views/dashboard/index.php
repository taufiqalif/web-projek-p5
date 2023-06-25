<?= $this->extend('dashboard/layouts/halaman'); ?>

<?= $this->section('isi'); ?>


<div class="container">
  <h1>Welcome to the Dashboard</h1>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Judul Pengumuman</h5>
          <span><?php echo date('d-m-Y'); ?></span>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo impedit velit expedita, aspernatur porro nisi praesentium unde quia ratione odit! Quos aut perspiciatis porro eum veniam ea aspernatur possimus, libero magni blanditiis, nisi dolores dignissimos odio asperiores eveniet quae accusantium architecto optio rerum earum in. <a href="#">Read more...</a> </p>

          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection(); ?>