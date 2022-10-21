<?php 

$server = "127.0.0.1";
$database = "appdb";
$user = "root";
$password = "";

$con = new PDO("mysql:host=$server;dbname=$database", "$user","$password" );
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($con == true) {
    echo "voce está conectado ao banco de dados" . PHP_EOL;
} else {
    echo "erro ao conectar";
};

$contas = [
    'nome'=>'José',
    'usuario'=>'TI',
    'email'=>'nico.doido@gmail.com',
    'sexo'=>'false',
    'numero'=>'975239051'];

    function insert ($con, array $valor) {
  $con->prepare('INSERT INTO 
  usuario (nome,usuario,email,sexo,numero) 
  VALUES (:nome,:usuario,:email)')->execute($valor);
    }


  // 
  // $email = 'nicollas.souza@gmail.com';
   $senha = 'a1222í2211111niver1';
  // $senhaDigitada = 'a12222211111niver1';
  // $usuarioDigitado = 'nicollas.souza';
  // 
   function contadorCaracteres($valor) { 

    if ((mb_strlen("$valor") <= 1)) {
    echo (mb_strlen("$valor") . " caracter")
    ;}
    else {
    echo (mb_strlen("$valor") . " caracteres");
    }
}

echo(contadorCaracteres('batata doce'));


  // 
  // if ($qtdSenha <= 13) {
  //     echo 'senha insegura <p>'. PHP_EOL;
  // } elseif ($qtdSenha  <= 17) {
  //     echo 'senha segura <p>'. PHP_EOL;
  // } else {
  //     echo 'senha  muito longa <p>' . PHP_EOL;
  // };
  // 
  // $posicao = strpos($email, '@');
  // 
  // $usuario = substr($email, 0, $posicao);
  // $dominio = substr($email, $posicao +1);
  // 
  // echo "$usuario <p>" . PHP_EOL;
  // echo "$dominio <p>" . PHP_EOL;
  // 
  // 
  // echo " $usuario <p> " . PHP_EOL;
  // 
  //   //  echo $senha . PHP_EOL;
  //   //  echo $senhaDigitada . PHP_EOL;
  //   //  echo $usuario . PHP_EOL;
  //   //  echo $usuarioDigitado . PHP_EOL;
  // $i = 0;
  // if ($usuarioDigitado == $usuario && $senhaDigitada == $senha) {
  //     // echo "você está conectado" . PHP_EOL;
  //     for ($i = 0; $i < 10000; $i ++) {
  //   # 
  //     };
  //   //  echo $i;
  //     header('Location: site.php');
  //     die();
  // }
  // else {
  //     echo 'digite novamente, pois o usuario ou senha digitada estão divergentes';
  // }
  // 
  // 
  // ?>