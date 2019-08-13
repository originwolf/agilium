<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$pessoa = filter_input(INPUT_POST, 'pessoa', FILTER_SANITIZE_STRING);
$tempo = filter_input(INPUT_POST, 'tempo', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
$bebida = filter_input(INPUT_POST, 'bebida', FILTER_SANITIZE_STRING);


// campos da tabela do bd


$result_cliente = "INSERT INTO cliente (nome, cpf,  email, celular, telefone, uf, cidade, endereco, numero, bairro) VALUES ('$nome', '$cpf', '$email', '$celular', '$telefone', '$estado', '$cidade', '$rua', '$numero', '$bairro')";
$resultado_cliente = mysqli_query($conn, $result_cliente);

$data = date("Y-m-d",strtotime(str_replace('/', '-', $data)));
$result_evento = "INSERT INTO evento (nomeEvento, cliente_idcliente, data, duracaoEvento, numeroPessoas, cardapioSolicitado, bebidasSolicitadas ) VALUES ('$tipo','$conn->insert_id','$data', '$tempo','$pessoa', '$mensagem', '$bebida')";
$resultado_evento = mysqli_query($conn, $result_evento);



if(mysqli_insert_id($conn)){
// 	$result_evento ="INSERT INTO evento (nomeEvento, 1) VALUES ('$tipo', '$cliente_idcliente')";
// $resultado_evento = mysqli_query($conn, $result_evento);
	$_SESSION['msg'] = "<p style='color:green;'>Pedido de orçamento enviado com sucesso</p>";
	header("Location: evento.php");

}else{
	$_SESSION['msg'] = "<p style='color:red;'Não foi possivel enviar o orçamento, por favor verifique os campos e tente novamente.</p>";
	header("Location: evento.php");
}
