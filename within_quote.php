  <!-- Quote Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary text-uppercase">
              Peça um orçamento
            </h5>
            <h1 class="mb-0">Quer um orçamento gratuito? Contate a gente!</h1>
          </div>
          <div class="row gx-3">
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
              <h5 class="mb-4">
                <i class="bi bi-reply-all-fill text-primary me-3"></i>Respondemos
                rápido
              </h5>
            </div>
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
              <h5 class="mb-4">
                <i class="bi bi-headset text-primary"></i> Suporte por
                Telefone 24 hrs
              </h5>
            </div>
          </div>
          <p class="mb-4">
            Nosso maior objetivo não é obter novos clientes, mas conhecer
            novos amigos, e por isso estamos sempre atentos a toda
            oportunidade de oferecer a todos o melhor atendimento, com o
            objetivo de ver nossos clientes satisfeitos e realizados com suas
            empresas informatizadas.
          </p>
          <h5 class="mb-2">
            Entre em contato
          </h5>


          <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px">
              <a class="bi bi-telephone-inbound-fill text-white" href="phone.php"></a>
            </div>
            <h4 class="text-primary mb-0">&nbsp;&nbsp;(19)99674-5466</h4>
          </div>

          <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">

            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px">
              <a class="bi bi-whatsapp text-white" href="zap.php"></a>
            </div>
            <h4 class="text-primary mb-0">&nbsp;&nbsp;(19)99674-5466</h4>
          </div>

        </div>

        <div class="col-lg-5">
          <h4 class="fw-bold text-primary">
            Mande-nos um email
          </h4>
          <div class=" bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">

            <form method="post" action="orcamentos.php">
              <div class="row g-3">
                <div class="col-xl-12">
                  <input type="text" class="form-control bg-light border-0" name="nome_msg" placeholder="Seu nome" style="height: 55px" required />
                </div>
                <div class="col-12">
                  <input type="email" class="form-control bg-light border-0" name="email_msg" placeholder="Seu Email" style="height: 55px" required />
                </div>
                <div class="col-12">
                  <select name="plano_msg" class="form-select bg-light border-0" required style="height: 55px">
                    <option selected>Selecione um Plano</option>
                    <option value="Plano Básico">Plano Básico</option>
                    <option value="Plano Standard">Plano Standard</option>
                    <option value="Plano Advanced">Plano Advanced</option>
                  </select>
                </div>
                <div class="col-12">
                  <textarea class="form-control bg-light border-0" rows="3" name="mensagem_msg" placeholder="Mensagem" required></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-dark w-100 py-3" type="submit">
                    Peça seu orçamento
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Quote End -->