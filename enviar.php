<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$nome=htmlspecialchars($_POST["nome"]);
$email=htmlspecialchars($_POST["email"]);
$mensagem=htmlspecialchars($_POST["mensagem"]);
$para="contato@habitta.com.br";
$assunto="Nova mensagem pelo site Habitta";
$corpo="Você recebeu uma nova mensagem pelo formulário do site:\n\nNome: $nome\nEmail: $email\nMensagem:\n$mensagem\n";
$headers="From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/".phpversion();
if(mail($para,$assunto,$corpo,$headers)){
echo "<script>alert('Mensagem enviada com sucesso!');window.location.href='contato.html';</script>";
}else{
echo "<script>alert('Erro ao enviar a mensagem. Tente novamente.');window.history.back();</script>";
}
}else{
header("Location: contato.html");
exit;
}
?>
