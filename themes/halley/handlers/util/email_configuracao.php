<?php

// NECESSÁRIO ESTAR ANTES DE TUDO
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// CAMINHO PARA OS ARQUIVOS PHPMAILER BAIXADOS
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';
require '../../phpmailer/src/Exception.php';
require_once '../../phpmailer/src/OAuth.php';
// ATUALIZAR AS INFORMAÇÕES ABAIXO BASEADO NO SERVIDOR DO EMAIL

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0; // ATIVA O DEBUGGIN PARA VERIFICAÇÃO DE ERROS (remover quando finalizados os testes)
$mail->IsSMTP(); // DEFINE O PADRÃO SMTP
$mail->Host = "smtp-relay.brevo.com"; // HOST DO SMTP
$mail->AuthType   = 'LOGIN';
$mail->SMTPAuth = true;
$mail->Username = "a28921001@smtp-brevo.com"; // EMAIL
$mail->Password = ''; // SENHA
$mail->SMTPSecure = "tls"; // SE O SMTP TIVER CRIPTOGRAFIA, USAR ESTA LINHA
$mail->Port = 587; // PORTA
$mail->setFrom('contato@halleylog.com.br', 'Halley Log'); // MESMO EMAIL DO USERNAME

$mail->addAddress($email); // EMAIL DO DESTINATÁRIO

$mail->IsHTML(true); // DEFINE QUE O E-MAIL SERÁ ENVIADO COMO HTML
$mail->setLanguage('pt');
$mail->Subject = $subject;
$mail->MsgHTML($corpoMSG);


try {
    $mail->send();
} catch (Exception $e) {
    $responseError = array(
      'status' => 'erro',
      'erro' => "Mailer Error: " . $mail->ErrorInfo
    );
    echo json_encode($responseError);
    exit;
}

?>
