<?php

//recupera os dados enviados pelo formulario
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//variaveis locais
$nome     = $GetPost['nome'];
$email    = $GetPost['email'];
$celular  = $GetPost['celular'];
$mensagem = $GetPost['mensagem'];

//incluir a classe phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Configurações do Servidor
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';//Email da hospedagem
    $mail->SMTPAuth = true;
    $mail->Username = '6d0aaac3a512be';//Email criado na hospedagem
    $mail->Password = 'ccbe5a17502586';//Senha do email da hospedagem
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;

    $mail->setFrom($email, $nome); //Quem está enviando o Email (Usuário)
    $mail->addAddress('gianelli.victor.adv@gmail.com', 'Victor H. Gianelli'); //Email de quem receberá as informações do Email
    
    //Conteúdo
    $mail->isHTML(true);                                 
    $mail->Subject = "$nome " . " ". date('d/m/y H:i:s');//Título do Email
    $mail->Body = "Nome: <b>$nome</b><br>Telefone: $celular<br><br>$mensagem";//Conteúdo do Email
    $mail->send();

    echo "<script type='text/javascript'>
            alert('E-mail enviado com sucesso!')
            window.location = \"contato.php\"
          </script>";

} catch (Exception $e) {
    echo "Erro: E-mail não enviado, favor entrar em contato com o administrador do site<br>";
    //echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
}

?>
 
