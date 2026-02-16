<?php

include('../util/funcoes_uteis.php');
include('../util/cript.php');
// date_default_timezone_set('America/Sao_Paulo');

$nome      = addslashes($_POST['nome']);
$email     = addslashes($_POST['email']);
$tel       = addslashes($_POST['tel']);
$empresa   = addslashes($_POST['empresa']);
$servico   = addslashes($_POST['servico']);
$assunto   = addslashes($_POST['assunto']);
$mensagem  = addslashes($_POST['mensagem']);

// PARA EVITAR SPAM
if(!empty($_POST['website'])) die();

// CHECANDO SE OS CAMPOS ESTÃO VAZIOS
checarVazio( $nome, 'nome'); 
checarVazio( $email, 'email');
checarVazio( $tel, 'tel');
checarVazio( $empresa, 'empresa');
checarVazio( $assunto, 'assunto');
checarVazio( $mensagem, 'mensagem');

/* RECAPTCHA */
$captcha = $_POST['g-recaptcha-response'];

if(!$captcha) {
  echo json_encode(array(
    'status' => 'erro',
    'erro' => 'Por favor, selecione a opção do "Não sou um robô" para submeter as informações do formulário'
  ));
  exit;
}
/* RECAPTCHA */

// CHECANDO SE POSSUI CONTEÚDO SUSPEITO
checarSpam($nome);
checarSpam($tel);
checarSpam($assunto);
checarSpam($empresa);
checarSpam($mensagem);


include(__DIR__.'/../connection.php');

try {

  // CONEXÃO PDO
  $pdo = conectar();

  //var_dump($pdo);
  //exit();

  // INSERT
  $stmt = $pdo->prepare('
    INSERT INTO wp_contato (
      nome,
      email,
      tel,
      empresa,
      servico,
      assunto,
      mensagem
    ) VALUES (
      :nome,
      :email,
      :tel,
      :empresa,
      :servico,
      :assunto,
      :mensagem
    )');
  $stmt->execute(array( 
    ':nome' => $nome,
    ':email' => criptografar(var: $email), 
    ':tel' => criptografar(var: $tel), 
    ':empresa' => criptografar(var: $empresa), 
    ':servico' => criptografar(var: $servico), 
    ':assunto' => criptografar(var: $assunto), 
    ':mensagem' => criptografar(var: $mensagem), 
  ));

  if($stmt->rowCount() >= 1){

     $assunto_email = utf8_decode('Halley Log - Novo contato realizado');
    $corpoMSG = utf8_decode('
    <body style="background-color: #EDEDED; font-family: Trebuchet MS, sans-serif;">
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr><td height="30" style="background-color: #ffffff">&nbsp;</td></tr>
          <tr width="750" style="background-color: #ffffff; text-align:center">
            <td width="750" align="center" style="background-color: #ffffff"><img src="https://halleylog.com.br/site/wp-content/uploads/2026/02/logo-halley-scaled.webp" width="250" alt="">
            </td>
          </tr>
          <tr><td style="background-color: #ffffff" height="30">&nbsp;</td></tr>

          <tr>
            <td>
              <table width="750" border="0" cellspacing="0" cellpadding="0" style="background-color:#ffffff; font-size:16px; color: #525252; line-height: 1.5">
                <tbody>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="50">&nbsp;</td>
                    <td>
                      <p>Prezado <strong>'.$nome.'</strong>, </p>
                      <p>Obrigado por entrar em contato com a Halley Log através do nosso formulário de contato.</p>
                    </td>
                    <td width="50">&nbsp;</td>
                  </tr>

                  <tr>
                    <td height="30">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="color: #002049;"><strong>INFORMAÇÕES INSERIDAS NO FORMULÁRIO</strong></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td><table width="100%" border="0" cellspacing="2" cellpadding="10" style="background-color:#ffffff; font-size:14px; color: #525252; line-height: 1.5">
                      <tbody>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Nome:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$nome.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>E-mail:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$email.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Telefone:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$tel.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Empresa:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$empresa.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Serviço:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$servico.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Assunto:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$assunto.'</td>
                        </tr>
                        <tr>
                          <td width="120" valign="top" bgcolor="#f6f6f6"><p><strong>Mensagem:</strong></p></td>
                          <td valign="top" bgcolor="#f6f6f6">'.$mensagem.'</td>
                        </tr>

                      </tbody>
                    </table></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td width="50">&nbsp;</td>
                    <td>
                      <p>Aguarde uma resposta nos próximos dias úteis.</p>
                      <p>Atenciosamente, </p>
                    </td>
                    <td width="50">&nbsp;</td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td style="border-top: 1px solid #eaeaea;">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td><p> <strong>Halley Log</strong> </p></td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td height="20" style="background-color: #FF272B;">&nbsp;</td>
                    <td height="20" style="background-color: #FF272B;">&nbsp;</td>
                    <td height="20" style="background-color: #FF272B;">&nbsp;</td>
                  </tr>

                  <tr style="background-color: #FF272B;">
                    <td>&nbsp;</td>
                    <td align="center">
                      <a href="https://halleylog.com.br" style="color: #FFF; text-decoration: none" target="_blank"> <strong>halley.com.br</strong> </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr style="background-color: #FF272B;">
                    <td height="20">&nbsp;</td>
                    <td height="20">&nbsp;</td>
                    <td height="20">&nbsp;</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
    ');

    $email = $email;
    $subject = utf8_decode($assunto_email);

    include('../util/email_configuracao.php');

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
