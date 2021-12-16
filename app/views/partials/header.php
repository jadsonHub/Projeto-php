<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid container ">
    <a class="navbar-brand text-white" href="#">Projeto PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-light" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  <?php echo $estadoHome; ?> text-white" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $estadoCreate; ?>" href="/user/create">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $estadoLogin; ?>" href="/login">Login</a>
        </li>
      </ul>

    </div>
    <div class="d-flex">
      <p class="text-white">Bem vindo, Visitante!</p>
    </div>

  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/img/imagem1.jpg" class="d-block w-100  img-carrousel" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/imagem2.jpg" class="d-block w-100 img-carrousel" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/imagem3.jpg" class="d-block w-100 img-carrousel" alt="...">
    </div>
  </div>
</div>