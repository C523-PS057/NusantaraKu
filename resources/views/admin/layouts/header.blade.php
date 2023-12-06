<header class="navbar navbar-dark sticky-top bg-dark p-0 shadow d-flex align-items-center justify-content-between">
  <a href="/admin/dashboard">
    <img src="/img/logo-wide-light.svg" alt="Logo NusantaraKu">
  </a>
    <p class="navbar-brand ">Selamat Datang, <strong>{{ auth()->user()->name }}</strong></p>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
      </div>
    </div>
</header>
