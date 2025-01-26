<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $nome_site ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/oficiallogo.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <?php require_once("toolbar.php"); ?>

  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
      <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0"><img src="img/logogg.png" width="60px" alt="Logo img" />
          <i class=""></i><?php echo $nome_site ?>
        </h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="about.php" class="nav-item nav-link">Sobre</a>
          <a href="service.php" class="nav-item nav-link">Serviços</a>
          <!--<div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
            <div class="dropdown-menu m-0">
              <a href="blog.html" class="dropdown-item">Blog Grid</a>
              <a href="detail.html" class="dropdown-item">Blog Detail</a>
            </div>
          </div>-->
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Conteúdo</a>
            <div class="dropdown-menu m-0">
              <a href="price.php" class="dropdown-item">Preços</a>
              <a href="feature.php" class="dropdown-item active">Habilidades</a>
              <a href="team.php" class="dropdown-item">Equipe</a>
              <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
              <a href="quote.php" class="dropdown-item">Orçamento</a>
            </div>
          </div>
          <a href="contact.php" class="nav-item nav-link">Contato</a>
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
            class="fa fa-search"></i></butaton>
        <a href="products.php" class="btn btn-primary py-2 px-4 me-3 slideInLeft">Produtos</a>
      </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/feito-1.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                Quem sabe, faz
              </h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                Rapidez e Solidez
              </h1>
              <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Orçamento
                Gratuito</a>
              <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/feito-2.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                Deixa com a gente
              </h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                Suporte 100% garantido
              </h1>
              <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Orçamento
                Gratuito</a>
              <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo </span>
    </button>
  </div>
  </div>
  <!-- Navbar & Carousel End -->

  <?php require_once("search.php"); ?>

  <?php require_once("facts.php"); ?>

  <?php require_once("within_feature.php"); ?>

  <?php require_once("rodape.php"); ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>