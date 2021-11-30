<?php include '../config/cabecalho.php' ?>
<?php
    include '../model/blog-model-pessoal.php';
    $introduction = introSection();
      include '../view/body_main.php';
      ?>

    <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58531.78828957184!2d-46.8411477149111!3d-23.52398513005406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf004a632904f7%3A0xd6681d03f881ddcb!2sCarapicu%C3%ADba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1634023069839!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      </div>
    </section>

<div class="container-fluid mb-5">
  <div class="row" style="margin-top: -100px;">

    <div class="col-md-12">

      <div class="card pb-5">
        <div class="card-body">

          <div class="container">

            <section class="section">
              <h2 class="font-weight-bold text-center h1 my-5">Meu contato!</h2>
              <p class="text-center grey-text mb-5 mx-auto w-responsive">Olá! Caso queria conversar sobre experiências profissionais e carreiras, entre em contato comigo :)</p>

              <div class="row pt-5">
                <div class="col-md-8 col-xl-9">

                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="md-form">
                          <input type="text" id="contact-name" class="form-control">
                          <label for="contact-name" class="">Seu nome</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form">
                          <input type="text" id="contact-email" class="form-control">
                          <label for="contact-email" class="">Seu e-mail</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form">
                          <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                          <label for="contact-message">Escreva aqui a sua mensagem!</label>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="text-center text-md-left my-4">
                    <a class="btn peach-gradient">Enviar</a>
                  </div>
                </div>
                <div class="col-md-4 col-xl-3">
                  <ul class="contact-icons text-center list-unstyled">
                    <li>
                      <i class="fas fa-map-marker fa-2x orange-text"></i>
                      <p>Victório Fornazaro, Carapicuíba, SP, 06397-000, BRASIL</p>
                    </li>
                    <li>
                      <i class="fas fa-phone fa-2x orange-text"></i>
                      <p>+55 (11) 97044-3180</p>
                    </li>
                    <li>
                      <i class="fas fa-envelope fa-2x orange-text"></i>
                      <p>aparecida.amanda@aluno.ifsp.edu.br</p>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include '../config/rodape.php' ?>
<?php include '../util/footer.php' ?> 
<?php include '../scripts.php' ?>