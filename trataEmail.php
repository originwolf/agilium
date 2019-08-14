<?php
	//1 – Definimos Para quem vai ser enviado o email
	$para = "suporte@agilium.com.br";

	//2 - resgatar os valores digitados no formulário e  grava nas variaveis
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$pessoa = $_POST["pessoa"];
	$texto = $_POST['texto'];

	//3 – Agora definimos a  mensagem que vai ser enviado no e-mail
	$mensagem = "Nome:  ".$nome;
	$mensagem .= "E-mail: ".$email;
	$mensagem .= "Telefone: ".$telefone;
	$mensagem .= "Pessoa: ".$pessoa;
	$mensagem .= "Mensagem: ".$texto;
	 
	//4 – agora inserimos as codificações corretas e  tudo mais.
	$headers =  "Content-Type:text/plain; charset=UTF-8\r\n";
	$headers .= "From:  agilium<contato@agilium.com.br>\r\n"; 
	//Vai ser mostrado que  o email partiu deste email e seguido do nome
	$headers .= "X-Sender:  <contato@agilium.com.br>zr\n"; 
	//email do servidor que enviou
	$headers .= "X-Mailer: PHP  v".phpversion()."\r\n";
	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\r\n";
	$headers .= "Return-Path:  <contato@agilium.com.br>\r\n"; 
	//caso a msg seja respondida vai para  este email.
	$headers .= "MIME-agiliu,: 1.0\n";
	 
	mail($para, $nome, $mensagem, $headers);  //função que faz o envio do email.
	header("Location: linkSite");