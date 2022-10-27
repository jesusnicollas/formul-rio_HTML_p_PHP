<?php 

include_once 'conexao.php';
// conectando ao banco de dados com user 'usrsite'


// dados do usuário que serão inseridos
$user1 = [
    'nome'=>'Bragatto',
    'usuario'=>'lucas.bragatto',
    'email'=>'bragas@gmail.com',
    'cpf'=>'11111100117',
    'senha'=>'tuégay'];
  

// INSERT dos dados do usuário no banco de dados
  $con->prepare('INSERT INTO tb_usuario (nome,usuario,email,cpf,senha) 
  VALUES (:nome,:usuario,:email,:cpf,:senha)')->execute($user1);


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

echo(contadorCaracteres($senha));


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