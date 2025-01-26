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
              <a href="blog.php" class="dropdown-item">Blog Grid</a>
              <a href="detail.php" class="dropdown-item">Blog Detail</a>
            </div>
          </div>-->
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Conteúdo</a>
            <div class="dropdown-menu m-0">
              <a href="price.php" class="dropdown-item">Preços</a>
              <a href="feature.php" class="dropdown-item">Habilidades</a>
              <a href="team.php" class="dropdown-item">Equipe</a>
              <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
              <a href="quote.php" class="dropdown-item">Orçamento</a>
            </div>
          </div>
          <a href="contact.php" class="nav-item nav-link">Contato</a>
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
            class="fa fa-search"></i></butaton>
        <a href="products.php" class="btn btn-primary py-2 px-4 me-3 slideInLeft active">Produtos</a>
      </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/coiso-1.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                <h1 class="display-4 text-white animated zoomIn">
                  Aplicativos <i class="bi bi-app"></i><br />
                  Softwares <i class="bi bi-window-sidebar"></i><br />
                  Sites <i class="bi bi-textarea-resize"></i>
                </h1>
              </h5>
              <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Orçamento
                Gratuito</a>
              <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/coiso-2.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h1 class="display-4 text-white animated zoomIn">
                <h1 class="display-4 text-white animated zoomIn">
                  Mobilidade <i class="bi bi-app"></i><br />
                  Integração <i class="bi bi-window-sidebar"></i><br />
                  API's <i class="bi bi-textarea-resize"></i>
                </h1>
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
  <!-- Navbar End -->

  <?php require_once("search.php"); ?>

  <?php require_once("facts.php"); ?>

  <!-- Pricing Plan Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
        <h5 class="fw-bold text-primary text-uppercase">
          Nossos Entregáveis
        </h5>
        <h1 class="mb-0">
          As pérolas conquistadas com nosso trabalho, além da satisfaçã dos
          clientes que estão diariamente nos ajudando a melhorar ainda mais.
          Fique à vontade na nossa prateleira!
        </h1>
      </div>
      <div class="row g-0">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="bg-light rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Aplicativos</h4>
              <small class="text-uppercase">Para trabalhos em conjunto ou separados</small>
            </div>
            <div class="p-5 pt-0">
              <h1 class="display-5 mb-3">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>Ligue<small
                  class="align-bottom" style="font-size: 16px; line-height: 40px">/ App</small>
              </h1>
              <div class="d-flex justify-content-between mb-3">
                <span>Ionic</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>React</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>SQL</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Stand Alone ou Agregado</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="bg-white rounded shadow position-relative" style="z-index: 1">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Softwares</h4>
              <small class="text-uppercase">Sistemas de Gerenciamento e Controle</small>
            </div>
            <div class="p-5 pt-0">
              <h1 class="display-5 mb-3">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>Ligue<small
                  class="align-bottom" style="font-size: 16px; line-height: 40px">/ Item</small>
              </h1>
              <div class="d-flex justify-content-between mb-3">
                <span>Estoque/Compras/Vendas</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Fluxo de Caixa</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Microsserviços</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>SQL</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="bg-light rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Sites</h4>
              <small class="text-uppercase">Seu negócio na Internet e no mundo inteiro</small>
            </div>
            <div class="p-5 pt-0">
              <h1 class="display-5 mb-3">
                <small class="align-top" style="font-size: 22px; line-height: 45px">$</small>Ligue<small
                  class="align-bottom" style="font-size: 16px; line-height: 40px">/ Site</small>
              </h1>
              <div class="d-flex justify-content-between mb-3">
                <span>HTML5 & CSS3</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Bootstrap v5</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Layout Responsivo</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Ajax</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="bg-white rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Ordens de Serviço e Vendas</h4>
              <small class="text-uppercase">Oficinas Mecânicas, Assistência Técnica e Vendas de Peças e
                Acessórios</small>
            </div>
            <div class="p-5 pt-0">

              <div class="d-flex justify-content-between mb-3">
                <span>Ponto de Venda</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Controle de Orçamentos</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Envio para o email do cliente</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Estoque Baixo -> Compras</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Relatórios de todos produtos e serviços</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Aplicativo incluso ou não</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="bg-light rounded shadow position-relative" style="z-index: 1">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Restaurantes</h4>
              <small class="text-uppercase">Sistemas de Gerenciamento para Restaurantes e Lanchonetes</small>
            </div>
            <div class="p-5 pt-0">


              <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                  src="img/hablidades.jpg" style="object-fit: cover" />
              </div>



              <div class="d-flex justify-content-between mb-3">
                <span>Reserva de mesas</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Estoque baixo -> Compras</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Fluxo de Caixa</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Cardápio direto nos relatórios</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Pedidos da mesa direto para a cozinha</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Aplicativo Ionic - Android e Ios</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="bg-white rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Mercados, Padarias e Lojas</h4>
              <small class="text-uppercase">Gestão completa, de Estoque, fluxo de entrada e saída e PDV</small>
            </div>
            <div class="p-5 pt-0">

              <div class="d-flex justify-content-between mb-3">
                <span>Ponto de Venda</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Estoque Baixo -> Compras</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <span>Relatórios em PDF</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Controle de funcionários e cientes</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Controle fichas, contaas a receber</span><i class="fa fa-check text-faded pt-1"
                  style="color:green"></i>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Aplicativo incluso ou não</span><i class="fa fa-check text-faded pt-1" style="color:green"></i>
              </div>
              <a href="quote.php" class="btn btn-primary py-2 px-4 mt-4">Faça seu pedido</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0">


        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
              src="img/LorenzoResst3.JPG" style="object-fit: cover" />
          </div>
        </div>


        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
              src="img/LorenzoResst.JPG" style="object-fit: cover" />
          </div>
        </div>

        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
              src="img/LorenzoResst2.JPG" style="object-fit: cover" />
          </div>
        </div>



      </div>

    </div>
  </div>
  <!-- Pricing Plan End -->

  <?php require_once("within_price.php"); ?>

  <?php require_once("within_quote.php"); ?>

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