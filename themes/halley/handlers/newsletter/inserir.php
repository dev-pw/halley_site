<?php
session_start();

include('../util/funcoes_uteis.php');
include('../util/cript.php');
include('../connection.php');

date_default_timezone_set('America/Sao_Paulo');

$email         = addslashes($_POST['email']);
$data_hora     = date('Y-m-d H:i:s');

checarVazio($email); // mesmo id do input

try {
	// CONEXÃO PDO
  $pdo = conectar();
	// SELECT

  $stmt = $pdo->prepare("SELECT * FROM wp_newsletter WHERE email_news = :email");
  $stmt->execute(array(
    ':email' => $email
  ));
  $registros = $stmt->fetchAll();

	if(count($registros) > 0){

    $responseError = array(
      'status' => 'erro',
      'erro' => 'Cadastro já realizado.'
    );
    echo json_encode($responseError);
    exit;

	}else{

    // ======================

    // INSERT
    $stmt = $pdo->prepare('
      INSERT INTO wp_newsletter (
        email_news, data_cadastro

      ) VALUES (
        :email_news, :data_cadastro

      )');

    $stmt->execute(array(
      ':email_news'    => $email,
      ':data_cadastro' => $data_hora
    ));


    if($stmt->rowCount() >= 1){
      $response = array(
        'status' => 'sucesso'
      );
      echo json_encode($response);
    }else{
      $responseError = array(
        'status' => 'erro',
        'erro' => 'Ocorreu um erro, tente novamente mais tarde'
      );
      echo json_encode($responseError);
    }

  }

  // =======================

} catch(PDOException $e) {
  $responseError = array(
    'status' => 'erro',
    'erro' => 'Error: ' . $e->getMessage()
  );
  echo json_encode($responseError);
}


exit;

?>
