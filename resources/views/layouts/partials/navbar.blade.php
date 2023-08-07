<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="/">Beasiswaku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang") ? 'active' : '' }}" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Daftar") ? 'active' : '' }}" href="/daftar">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Hasil") ? 'active' : '' }}" href="/hasil">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>