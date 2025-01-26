<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
  <div class="row gx-0">
    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
      <div class="d-inline-flex align-items-center" style="height: 45px;">
        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i><?php echo $endereco ?></small>
        <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><?php echo $telefone ?></small>
        <small class="text-light"><i class="fa fa-envelope-open me-2"></i><?php echo $email ?></small>
      </div>
    </div>
    <div class="col-lg-4 text-center text-lg-end">
      <div class="d-inline-flex align-items-center" style="height: 45px;">
        <?php if ($facebook_empresarial != "") {
          echo '<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="' . $facebook_empresarial . '" target="_blank" title="Visitar Facebook"><i class="fab fa-facebook-f fw-normal"></i></a>';
        } ?>
        <?php if ($instagram_pessoal != "") {
          echo '<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="' . $instagram_pessoal . '" target="_blank" title="Visitar Instagram"><i class="fab fa-instagram fw-normal"></i></a>';
        } ?>

        <?php if ($youtube_empresarial != "") {
          echo '<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="' . $youtube_empresarial . '" target="_blank" title="Visitar Instagram"><i class="fab fa-youtube fw-normal"></i></a>';
        } ?>

      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->