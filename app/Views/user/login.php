<?= $this->extend('layout/templates'); ?>


<?= $this->section('content'); ?>

<main class="form-signin">
  <form>
    <img class="mb-4" src="img/logo-removebg-preview.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-3 mb-3 text-muted">&copy; <?php echo date('Y'); ?></p>
  </form>
</main>


<?= $this->endSection(); ?>