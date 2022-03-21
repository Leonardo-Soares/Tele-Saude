<header>
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="<?= __IMGDIR; ?>/header/logo-2.png" alt="" width="180">
      </a>
      <a class="navbar-brand">
        <img src="<?= __IMGDIR; ?>/header/parceiros.jpg" alt="" >
      </a>
    </div>
  </nav>

  <nav class="navbar d-flex justify-content-end">
    <div class="container justify-content-end p-2">
      <a class="navbar-brand d-none d-sm-block" href="#" title="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="navbar-brand d-none d-sm-block" href="#" title="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="navbar-brand d-none d-sm-block pe-5" href="#" title="Twitter">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="navbar-brand pe-5" href="#" title="Protocolo">
        <i class="far fa-file-alt"></i>
        Protocolo
      </a>

      <a class="navbar-brand" href="#" title="Login/Cadastro">
        <i class="fas fa-user"></i>
        Login/ Cadastro
      </a>
    </div>

  </nav>


  <nav class="navbar navbar-expand-sm">
    <div class="menu container-fluid justify-content-end">
      <div class="container collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/" >Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Quem Somos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/quemsomos">O Telessaúde</a></li>
              <li><a class="dropdown-item" href="/equipe">A Equipe</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/educacao">Educação</a></li>
              <li><a class="dropdown-item" href="/consultoria">Consultoria</a></li>
              <li><a class="dropdown-item" href="/diagnostico">Diagnóstico</a></li>
              <li><a class="dropdown-item" href="/atendimento">Atendimento</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Comunicação
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/noticias">Notícias</a></li>
              <li><a class="dropdown-item" href="/informativos">Informativos</a></li>
              <li><a class="dropdown-item" href="/videos">Vídeos</a></li>
              <li><a class="dropdown-item" href="/identidade-visual">Manual de Identidade Visual</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/fale-conosco">Fale Conosco</a>
          </li>
        </ul>
      </div>
      <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

</header><!-- header -->