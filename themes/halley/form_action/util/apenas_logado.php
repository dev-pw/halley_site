<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// SE ESTIVER DESLOGADO, REDIRECIONAR PARA LOGIN
if(!isset($_SESSION['email']) && !isset($_SESSION['senhauser']) ){
  echo '<script type="text/javascript">
          window.location.href = "https://site.com/login";
        </script>';
  exit;
}

// DEFININDO VARIÁVEIS DA A PARTIR DA SESSÃO
$id_sessao        = $_SESSION['id'];
$nome_sessao      = $_SESSION['nome'];
$sobrenome_sessao = $_SESSION['sobrenome'];
$cpf_sessao       = $_SESSION['cpf'];
$email_sessao     = $_SESSION['email'];

?>
