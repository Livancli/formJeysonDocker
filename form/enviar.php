<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do Site';
$remetente = 'silvestrevideoproducoes@gmail.com';



// echo 'Nome: ' . $nome . '<p>'; 
// echo 'Email: ' . $email . '<p>'; 
// echo 'Mensagem: ' . $mensagem . '<p>'; 


$conteudo = 'Nome: ' . $nome . "\r\n" . "\r\n" . 'Email: ' . $email . "\r\n\r\n\r\n" . 'Mensagem: ' . $mensagem . "\r\n" . "\r\n" . "\r\n\r\n\r\n\r\n";


$cabecalhos = "From: " . $email;

mail($remetente, $assunto, $mensagem, $cabecalhos);


?>

<script> alert('Enviado com Sucesso') </script>

<meta http-equiv="refresh" content="0; url=index.php">