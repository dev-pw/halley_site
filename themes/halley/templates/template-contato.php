<?php
  /*
   * Template Name: Contato
   * Template Post Type: post, page
   */

  get_header();

  if(isset($_GET['contato']) && $_GET['contato'] == 'sucesso' ){
    echo "
      <script>
        alert('Informações recebidas, obrigado pelo contato.');
        // REMOVER PARAMETRO DA URL DEPOIS DE MOSTRAR A MENSAGEM
        window.history.replaceState({}, document.title, '/' + 'fale-conosco/');
      </script>
    ";
  }

?>

<main>
  <section class="page-title">
    <div class="container">
      <h1>
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <!-- SEÇÃO -->
  <section class="page-interna mb-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 mb-6">

          <!-- <h2 class="">Acessar</h2> -->

          <div class="container-box">
            <p class="mb-0"> <strong>Email:</strong> <a href="mailto:contato@teste.com.br" class="link-texto"> contato@teste.com.br </a> </p>
            <hr>
            <p> <strong>Telefone:</strong> <a href="#" class="link-texto"> (11) 9.999-999 </a> </p>
            <hr>
            <p> <strong>Telefone:</strong> <a href="#" class="link-texto"> (11) 9.999-999 </a> </p>
            <hr>
            <p> <strong>Telefone:</strong> <a href="#" class="link-texto"> (11) 9.999-999 </a> </p>
          </div>

        </div>

        <div class="col-lg-6 mb-5">

          <div class="container-form">

              <!-- FORM -->
              <form class="form-padrao mb-1" action="../form_action/contato.php" method="post">

                <div class="container">

                  <!-- INPUT NOME -->
                  <div class="row">
                    <div class="col-lg-12 form-input">
                      <label for="nome_contato"> Nome: </label> <input type="text" name="nome_contato" value="" id="nome_contato">
                    </div>
                  </div>

                  <!-- INPUT EMAIL -->
                  <div class="row">
                    <div class="col-lg-12 form-input">
                      <label for="email_contato"> E-mail: </label> <input type="email" name="email_contato" value="" id="email_contato">
                    </div>
                  </div>

                  <!-- INPUT ASSUNTO -->
                  <div class="row">
                    <div class="col-lg-12 form-input">
                      <label for="assunto_contato"> Assunto: </label> <input type="text" name="assunto_contato" value="" id="assunto_contato">
                    </div>
                  </div>

                  <!-- INPUT MENSAGEM -->
                  <div class="row">
                    <div class="col-lg-12 form-input">
                      <label for="msg_contato"> Mensagem: </label> <textarea name="msg_contato" id="msg_contato" rows="4" cols="50"> </textarea>
                    </div>
                  </div>

                  <!-- INPUT SUBMIT -->
                  <input type="submit" name="" class="btnPad-2 btnSubmit absolute-center" value="Enviar">

                </div>

              </form>

          </div>

        </div>

      </div>

    </div>

  </section>


</main>


<?php get_footer(); ?>
