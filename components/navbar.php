<nav class="navbar navbar-expand-lg bg-body-tertiary shadow py-2 px-3 bg-white rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="/spotiweb">
      <h4>Spoti <span class="danger">Web</span></h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $page == 'index' ? 'active' : '' ?>" aria-current="page" href="/spotiweb">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'profile' ? 'active' : '' ?>" href="/spotiweb/profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'bookmarks' ? 'active' : '' ?>" href="/spotiweb/bookmarks.php">Bookmarks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'charts' ? 'active' : '' ?>" href="/spotiweb/charts.php">Charts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
