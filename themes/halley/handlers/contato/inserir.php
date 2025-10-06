<?php

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome  = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

// PARA EVITAR SPAM
if(!empty($_POST['website'])) die();

/* RECAPTCHA */
// $captcha = $_POST['g-recaptcha-response'];
//
// if(!$captcha) {
//   echo json_encode(array(
//     'status' => 'erro',
//     'erro' => 'Por favor, selecione a opção do "Não sou um robô" para submeter as informações do formulário'
//   ));
//   exit;
// }
/* RECAPTCHA */

// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio($nome); // mesmo id do input
checarVazio($telefone); // mesmo id do input
checarVazio($email); // mesmo id do input
checarVazio($assunto); // mesmo id do input
checarVazio($mensagem); // mesmo id do input

// CHECANDO SE POSSUI CONTEÚDO SUSPEITO
checarSpam($nome);
checarSpam($telefone);
checarSpam($assunto);
checarSpam($mensagem);


include('../connection.php');

try {

  // CONEXÃO PDO
  $pdo = conectar();

  // INSERT
  $stmt = $pdo->prepare('
    INSERT INTO contato_site (
      nome_contato, email_contato, tel_contato, assunto_contato, mensagem_contato
    ) VALUES (
      :nome_contato, :email_contato, :tel_contato, :assunto_contato, :mensagem_contato
    )');
  $stmt->execute(array(
    ':nome_contato' => criptografar($nome),
    ':email_contato' => criptografar($email),
    ':tel_contato' => criptografar($telefone),
    ':assunto_contato' => $assunto,
    ':mensagem_contato' => criptografar($mensagem)
  ));

  if($stmt->rowCount() >= 1){

    echo json_encode(array(
      'status' => 'sucesso'
    ));

  }else{
    echo json_encode(array(
      'status' => 'erro',
      'erro' => 'Ocorreu um erro, tente novamente mais tarde'
    ));
  }

} catch(PDOException $e) {
  $responseError = array(
    'status' => 'erro',
    'erro' => 'Error: ' . $e->getMessage()
  );
  echo json_encode($responseError);
}

?>
