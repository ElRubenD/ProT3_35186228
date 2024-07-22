<?php
  $session = session();
  $nombre = $session->get("nombre");
  $perfil = $session->get("perfil_id");
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="logo" href="principal">
      <img src="./assets/img/8-removebg-preview (1).png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1) :?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">Admin: <?php echo session('nombre'); ?></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar me-auto mb-2 mb-lg-0 justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="tienda" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tienda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Star Wars</a></li>
            <li><a class="dropdown-item" href="show">MonsterVerse</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Godzilla</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout') ;?>" tabindex="-1" aria-disabled="true">
            Cerrar Sesion
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <?php elseif(session()->perfil_id == 2) :?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">Cliente: <?php echo session('nombre'); ?></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar me-auto mb-2 mb-lg-0 justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">
            Quienes somos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">
            Acerca de nosotros
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="tienda" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tienda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Star Wars</a></li>
            <li><a class="dropdown-item" href="show">MonsterVerse</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Godzilla</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout') ;?>" tabindex="-1" aria-disabled="true">
            Cerrar Sesion
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <?php else :?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar me-auto mb-2 mb-lg-0 justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">
            Quienes somos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">
            Acerca de nosotros
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="tienda" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tienda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Star Wars</a></li>
            <li><a class="dropdown-item" href="show">MonsterVerse</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Godzilla</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">
            Registrarse
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">
            Login
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout') ;?>" tabindex="-1" aria-disabled="true">
            Cerrar Sesion
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <?php endif?>
    </div>
  </div>
</nav>