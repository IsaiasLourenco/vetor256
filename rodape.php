<?php require_once("config.php") ?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-4 col-md-6 footer-about">
        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
          <a href="index.php" class="navbar-brand">
            <h1 class="m-0 text-white">
              <img src="img/logogg.png" alt="Logo img" width="150px">
              <i class=""></i><?php echo $nome_site ?>
            </h1>
          </a>
          <p class="mt-3 mb-4 text-white">
            Nossa empresa preza pela transparência e estamos prontos a
            escutar, absorver, fazer novas amizades, expandir nosso Time
            compartilhar e ensinar smpre que necessário. Engajamento é tudo
            no mundo comercial de hoje. Escreva-nos.
          </p>
          <!--<form action="mailto:isaiaslourenco2020@gmail.com" method="post" enctype="text/plain">
            <div class="input-group">
              <input type="text" class="form-control border-white p-3" placeholder="Seu Email" required/>
              <input type="text" class="form-control border-white p-3" placeholder="Mensagem" required/>  
              <button type="submit" value="enviar" class="btn btn-dark">Enviar</button>
              <button type="reset" value="limpar" class="btn btn-dark">Limpar</button>
            </div>
          </form>-->
          <form action="mailto:isaiaslourenco2020@gmail.com" method="post" enctype="text/plain" action="orcamentos.php">
              <div class="row g-3">
                <div class="col-xl-12">
                  <input type="text" class="form-control bg-light border-0" name="nome_msg" placeholder="Seu nome" style="height: 55px" required />
                </div>
                <div class="col-12">
                  <input type="email" class="form-control bg-light border-0" name="email_msg" placeholder="Seu Email" style="height: 55px" required />
                </div>
                <div class="col-12">
                  <textarea class="form-control bg-light border-0" rows="3" name="mensagem_msg" placeholder="Mensagem" required></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-dark w-100 py-3" type="submit" value="enviar">
                    Peça seu orçamento
                  </button>
                  <button class="btn btn-primary w-100 py-3" type="reset" value="limpar" class="form-control btn btn-secondary">
                    Limpar os campos
                  </button>
                </div>
              </div>
            </form>
        </div>
      </div>
      <div class="col-lg-8 col-md-6">
        <div class="row gx-5">
          <div class="col-lg-4 col-md-12 pt-5 mb-5">
            <div class="container-fluid text-primary section-title-sm position-relative pb-3 mb-4">
              <h3 class="text-light mb-0">Entre em contato</h3>
            </div>
            <div class="d-flex mb-2">
              <i class="bi bi-geo-alt text-primary me-2"></i>
              <p class="mb-0"><?php echo $endereco ?></p>
            </div>
            <div class="d-flex mb-2">
              <i class="bi bi-envelope-open text-primary me-2"></i>
              <p class="mb-0"><?php echo $email ?></p>
            </div>
            <div class="d-flex mb-2">
              <i class="bi bi-telephone text-primary me-2"></i>
              <p class="mb-0"><?php echo $telefone ?></p>
            </div>
            <div class="d-flex mt-4">
              <?php if ($youtube_empresarial != "") {
                echo '<a class="btn btn-primary btn-square me-2" href="' . $youtube_empresarial . '" target="_blank" title="Visitar Youtube"><i class="fab fa-youtube fw-normal"></i></a>';
              } ?>
              <?php if ($facebook_empresarial != "") {
                echo '<a class="btn btn-primary btn-square me-2" href="' . $facebook_empresarial . '" target="_blank" title="Visitar Facebook"><i class="bi bi-facebook text-uppercase"></i></a>';
              } ?>
              <?php if ($linkedin != "") {
                echo '<a class="btn btn-primary btn-square me-2" href="' . $linkedin . '" target="_blank" title="Visitar Linkedin"><i class="fab fa-linkedin fw-normal"></i></a>';
              } ?>
              <?php if ($instagram_pessoal != "") {
                echo '<a class="btn btn-primary btn-square me-2" href="' . $instagram_pessoal . '" target="_blank" title="Visitar Instagram"><i class="fab fa-instagram fw-normal"></i></a>';
              } ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="text-light mb-0">Links</h3>
            </div>
            <div class="link-animated d-flex flex-column justify-content-start">
              <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
              <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre</a>
              <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Serviços</a>
              <a class="text-light mb-2" href="team.php"><i class="bi bi-arrow-right text-primary me-2"></i>Conheça
                nosso Time</a>
              <a class="text-light mb-2" href="blog.php"><i class="bi bi-arrow-right text-primary me-2"></i>Últimas
                do Blog</a>
              <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contato</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
              <h3 class="text-light mb-0">Links Externos</h3>
            </div>
            <div class="link-animated d-flex flex-column justify-content-start">
              <a class="text-light mb-2" target="_blank" href="https://www.google.com/"><i class="bi bi-arrow-right text-primary me-2"></i>Google</a>
              <a class="text-light mb-2" target="_blank" href="https://www.microsoft.com/pt-br/microsoft-365/business/compare-all-microsoft-365-business-products-b?&ef_id=CjwKCAiA9NGfBhBvEiwAq5vSy1WJ_IY02sjoieRN4t8PdAw78NGWQlgCqOJ6IepbOcv-TgX04HuwCRoCRxYQAvD_BwE:G:s&OCID=AIDcmm409lj8ne_SEM_CjwKCAiA9NGfBhBvEiwAq5vSy1WJ_IY02sjoieRN4t8PdAw78NGWQlgCqOJ6IepbOcv-TgX04HuwCRoCRxYQAvD_BwE:G:s&lnkd=Google_O365SMB_Brand&gclid=CjwKCAiA9NGfBhBvEiwAq5vSy1WJ_IY02sjoieRN4t8PdAw78NGWQlgCqOJ6IepbOcv-TgX04HuwCRoCRxYQAvD_BwE"><i class="bi bi-arrow-right text-primary me-2"></i>Microsoft</a>
              <a class="text-light mb-2" target="_blank" href="https://wpinformatica.online/multimarcas/?gclid=CjwKCAiA9NGfBhBvEiwAq5vSy8ebxb3LpHr9q1lbdcrQndPey4bxLaBOFMllf4ZcG6S_yx8o2Q32RxoCtL0QAvD_BwE"><i class="bi bi-arrow-right text-primary me-2"></i>Formate
                seu PC</a>
              <a class="text-light mb-2" target="_blank" href="https://recoverit.wondershare.com.br/computer-troubleshooting/speed-up-pc.html?gclid=CjwKCAiA9NGfBhBvEiwAq5vSyw4S970zbgZh7MP3ILlFFF3uIim88C513YCPhGbJmdyMTPWJRuCfUhoCcJUQAvD_BwE"><i class="bi bi-arrow-right text-primary me-2"></i>Acelere
                seu lap/desktop</a>
              <a class="text-light mb-2" target="_blank" href="https://campanhas.serpro.gov.br/institucional/inovacao-que-pulsa/?gclid=CjwKCAiA9NGfBhBvEiwAq5vSyzCNpJ7oI-QJhs1B4yi8vwba8Gi6ITrIWh_33ULTLutK3vGq-PMzmhoCFiYQAvD_BwE"><i class="bi bi-arrow-right text-primary me-2"></i>Últimas
                do mundo da T.I.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid text-primary" style="background: #061429">
  <div class="container text-center">
    <div class="row justify-content-end">
      <div class="col-lg-8 col-md-6">
        <div class="d-flex align-items-center justify-content-center" style="height: 75px">
          <p class="mb-0">
            &copy;
            <a class="border-bottom" href="index.php"><?php echo $nome_site ?></a> Todos os direitos
            reservados.

            Desenvolvido por

            <a class="border-bottom" href="index.php"><?php echo $nome_site ?></a>&copy;
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->