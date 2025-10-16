<?php
// Dados de conexão

// ===== FUNÇÃO CONECTAR ======
// ============================
function conectar(){
  $server = "halley_homo.vpshost4670.mysql.dbaas.com.br";
  $user   = "halley_homo";
  $pass   = "LDX0K4wHT9q@";
  $db     = "halley_homo";

  try {
      $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass );
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // EXIBIR ERROS
      $pdo->exec("SET CHARACTER SET utf8");

  } catch (\Throwable $th) {
      return $th;
      die;
  }

  return $pdo;
}

?>
