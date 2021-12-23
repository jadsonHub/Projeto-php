<?php

use PHPMailer\PHPMailer\PHPMailer;



function enviarEmail($emailDest, $Titulo, $Mensagem)
{

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;

  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;

  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->SMTPAuth = true;

  $mail->Username = 'supdevphp@gmail.com';
  $mail->Password = 'dudueduardo';

  $mail->setFrom('supdevphp@gmail.com');
  $mail->addAddress($emailDest);

  $mail->isHTML(true);
  $mail->Subject = $Titulo;
  $mail->Body = $Mensagem;

  if ($mail->send()) {
    return  'enviado o email';
  } else {
    return 'Não enviado!';
  }
}

function mensagemEmail($tipo,$valorToken = ''){


  if($tipo === 'cadastro'){

    return '<p>Parabéns por fazer seu cadastro na plataforma DEV-PHP seu email foi autenticado!</p>';
  }
  else if($tipo === 'atualizar'){
    return '<p>Seu cadastro foi atualizado com sucesso!</p>';
  }
  else if($tipo === 'token'){
     return "<p>Para recuperar sua conta utilizar o token abaixo!</p><br><br><br>Token: {$valorToken}";
  }
  else if($tipo === 'deletar'){
    return '<p>Deletamos sua conta com sucesso! seus dados foram apagados da nossa base de dados.';
  }
}

