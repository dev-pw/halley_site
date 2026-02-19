<?php

require_once __DIR__ . '/../../lib/autoload.php'; // Certifique-se de que o autoload do Composer está disponível

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
$dotenv->load();

// NECESSÁRIO ESTAR ANTES DE TUDO
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// CAMINHO PARA OS ARQUIVOS PHPMAILER BAIXADOS
require dirname(__FILE__).'/../../lib/phpmailer/src/PHPMailer.php';
require dirname(__FILE__).'/../../lib/phpmailer/src/SMTP.php';
require dirname(__FILE__).'/../../lib/phpmailer/src/Exception.php';
require_once dirname(__FILE__).'/../../lib/phpmailer/src/OAuth.php';
// ATUALIZAR AS INFORMAÇÕES ABAIXO BASEADO NO SERVIDOR DO EMAIL

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0; // ATIVA O DEBUGGIN PARA VERIFICAÇÃO DE ERROS (remover quando finalizados os testes)
$mail->IsSMTP(); // DEFINE O PADRÃO SMTP
$mail->Host = $_ENV['EMAIL_HOST']; // HOST DO SMTP
$mail->AuthType   = 'LOGIN';
$mail->SMTPAuth = true;
$mail->Username = $_ENV['EMAIL_USER']; // EMAIL
$mail->Password = $_ENV['EMAIL_PASS']; // SENHA
$mail->SMTPSecure = $_ENV['EMAIL_SMTP']; // SE O SMTP TIVER CRIPTOGRAFIA, USAR ESTA LINHA
$mail->Port = $_ENV['EMAIL_PORT']; // PORTA
$mail->setFrom('contato@halleylog.com.br', 'Halley Log'); // MESMO EMAIL DO USERNAME

$mail->addAddress($email); // EMAIL DO DESTINATÁRIO
// $mail->AddBCC("lucas.brandao@planetaw.ag"); // EMAIL DO DESTINATÁRIO


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
