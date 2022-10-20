<?php
$nome= $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['message'];
$formcontent = "Mensagem enviada por: $nome n Texto: $mensagem";
$recipient = "seu-email-aqui@gmail.com";
$subject = "Formulário de contato";
$mailheader = "De: $email rn";

echo " $nome  , Obrigado por entrar em contato!";
// mail($recipient, $subject, $formcontent, $mailheader) 
//or die("Erro!");


?>
<html>
    <body>
        <p>
        <a href="site.php">
            <input type="submit" value="VOLTAR"> 
        </a>
    </body>
</html>