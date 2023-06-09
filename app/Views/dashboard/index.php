<?= $this->extend('dashboard/layouts/halaman'); ?>

<?= $this->section('isi'); ?>


<div class="container">
  <h1>Welcome to the Dashboard</h1>
  <div class="welcome-message">
    <p>Hello, <?= session()->get('username'); ?>! This is the dashboard page.</p>
  </div>
  <div class="logout-link">
    <a href="[logout_url]">Logout</a>
  </div>
</div>

<?= $this->endSection(); ?>