<?php 
header('Content-Type: text/html; charset=utf-8');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

include("conexao.php");

$inserirbanco = mysqli_query($conexao, "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem');");

//require 'mailer/PHPMailerAutoload.php';
include 'phpmailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
$mailer->Port = 587;
$mailer->SMTPDebug = 0;
$mailer->Host = 'smtp.gmail.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'julianadelimaprass@gmail.com';
$mailer->Password = 'ehhz fcfc iqcr nuca';
//Dados de quem vai enviar o e-mail
$mailer->From = 'julianadelimaprass@gmail.com';
$mailer->FromName = 'TeeSpeak';
// Dados de quem vai receber o e-mail
$mailer->AddAddress('julianadelimaprass@gmail.com', 'Juliana Lima');

$mailer->Subject = 'Novo contato';
$mailer->IsHTML(true);
$mailer->Body = '
<h1>Novo contato</h1>
<p>Nome: '.$nome.'</p>
<p>E-mail: '.$email.'</p>
';

if(!$mailer->Send()){
    $mensagem = 'Erro ao enviar o e-mail';
} else {
    $mensagem = 'E-mail enviado com sucesso';
}
echo $mensagem;
?>