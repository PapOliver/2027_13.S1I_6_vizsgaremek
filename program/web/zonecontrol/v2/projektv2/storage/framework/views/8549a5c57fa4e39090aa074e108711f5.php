<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/names">Names</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/names/manage/surname">Surnames</a>
        </li>
        
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item ms-lg-auto">
          <a href="/profile" class="nav-link">Profile</a>
        </li>

        <li class="nav-item ms-lg-auto">
          <a class="nav-link" href="/home" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout (<?php echo e(auth()->user()->name); ?>)</a>
          <form id="logout-form" action="/logout" method="POST" >
            <?php echo csrf_field(); ?>
          </form>
        </li>

        <?php else: ?>

        <li class="nav-item ms-lg-auto">
          <a class="nav-link" href="/login">Login</a>
          <form id="login-form" action="/login" method="POST" >
            <?php echo csrf_field(); ?>
          </form>
        </li>

        <li class="nav-item ms-lg-auto">
          <a class="nav-link" href="/register" >Register</a>
          <form id="register-form" action="/register" method="POST" >
            <?php echo csrf_field(); ?>
          </form>
        </li>

        <?php endif; ?>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/includes/nav.blade.php ENDPATH**/ ?>