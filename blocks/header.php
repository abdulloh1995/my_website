
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">INEXUS</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Biz haqimizda</a>
    <a class="p-2 text-dark" href="#">Imkoniyatlar</a>
    <a class="p-2 text-dark" href="#">Bizga bog'laning</a>
    <a class="p-2 text-dark" href="#">Tariflar</a>
  </nav>

  <?php 
  if (isset($_COOKIE['user']) == 'true'):
  ?>
  <a class="btn btn-outline-primary" href="auth.php">Shayxsiy kabinet</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="auth.php">Kirish</a>
  <?php endif; ?>
</div>