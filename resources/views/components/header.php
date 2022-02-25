<header>
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= __IMGDIR; ?>/header/logo.jpeg" alt="" width="100">
      </a>
      <a class="navbar-brand" href="#">
        <img src="<?= __IMGDIR; ?>/header/parceiros.png" alt="" width="350">
      </a>
    </div>
  </nav>

  <nav class="navbar d-flex justify-content-end">
    <div class="container justify-content-end p-2">
      <a class="navbar-brand" href="#">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="navbar-brand" href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="navbar-brand pe-5" href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="navbar-brand pe-5" href="#">
        <i class="far fa-file-alt"></i>
        Protocolo
      </a>

      <a class="navbar-brand" href="#">
        <i class="fas fa-user"></i>
        Login/ Cadastro
      </a>
    </div>

  </nav>


  <nav class="navbar navbar-expand-sm">
    <div class="menu container-fluid justify-content-end" style="background-color: #95C11F;">
      <div class="container collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 p-2">
          <li class="nav-item">
            <a class="nav-link" style="color: #fff;" aria-current="page" href="/">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Quem Somos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #95C11F;">
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/quemsomos">O TeleSaúde</a></li>
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/equipe">A Equipe</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #95C11F;">
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/tele-educacao">Tele-Educação</a></li>
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/teleconsultria">Teleconsultoria</a></li>
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/telediagnostico">Telediagnóstico</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Comunicação
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #95C11F;">
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href=""></a></li>
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/"></a></li>
              <li><a style="font-size: 1.6rem;" class="dropdown-item" href="/"></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #fff;" aria-current="page" href="/fale-conosco">Fale Conosco</a>
          </li>
        </ul>
      </div>
      <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i style="font-size: 20px; color: white;" class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

</header><!-- header -->