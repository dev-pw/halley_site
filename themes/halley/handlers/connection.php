<?php
// Dados de conexão

// ===== FUNÇÃO CONECTAR ======
// ============================
require_once __DIR__ . '/../lib/autoload.php'; // Certifique-se de que o autoload do Composer está disponível

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

function conectar(){
  $server = $_ENV['DB_HOST'];
  $user   = $_ENV['DB_USER'];
  $pass   = $_ENV['DB_PASS'];
  $db     = $_ENV['DB_NAME'];

  try {
      $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass );
      // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // EXIBIR ERROS
      $pdo->exec("SET CHARACTER SET utf8");

  } catch (\Throwable $th) {
      return $th;
      die;
  }

  return $pdo;
}

?>
