<?php

$json = $_POST['json'];
$json = json_decode($json, true);

$email_remetente = "noreply@bastosbertolaccini.adv.br";

$name = $json['nome'];
$email_usuario = $json['email'];
$mensagem = '';

$mensagem = '<span><strong>Nome: </strong>'. $json['nome'] . '</span><br>';
$mensagem = $mensagem . '<span><strong>E-mail: </strong>' . $json['email'] . '</span><br>' ;

if($json['telefone'] != ''){
  $mensagem = $mensagem . '<span><strong>Telefone: </strong>'.$json['telefone'].'</span><br><br>';
}

$mensagem.= '<span><strong>Mensagem: </strong>' . str_replace("\n", "<br>", $json['mensagem']) . '</span>';

$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$headers .= "From: $name <$email_remetente>\n"; // remetente
$headers .= "Return-Path: $email_remetente\n"; // return-path
$headers .= "Reply-To: $email_usuario\n"; // Endereço (devidamente validado) que o seu usuário informou no contato  

$to = "paulohpfranco@uol.com.br";

if(IsInjected($visitor_email)) {
  echo "Bad email value!";
  exit;
}

echo mail("$to","Formulario de contato - Bastos e Bertolaccini","$mensagem", "$headers", "-f$email_remetente");

function IsInjected($str) {
  $injections = array('(\n+)',
   '(\r+)',
   '(\t+)',
   '(%0A+)',
   '(%0D+)',
   '(%08+)',
   '(%09+)'
 );

  $inject = join('|', $injections);
  $inject = "/$inject/i";

  if(preg_match($inject,$str)) {
    return true;
  } else {
    return false;
  }
}

?>