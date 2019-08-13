<!-- variavel global php para apresntar o erro ao usr -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
	<title>Naomi</title>

	<meta name="author" content="Bruna, Gabrielly, Luis Otavio, Natalia">
	<meta name="description" content="Website trata sobre o pesqueiro e restaurante Naomi">
	<meta name="keywords" content="restaurante, naomi"><!-- palavras que digitadas poderão levar ao seu site ser encontrado -->
	<meta name="robots" content="index, follow"><!-- palavras que digitadas não levarão (não poderá levar de maneira alguma) ao seu site ser encontrado -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- usada para reconhecer o bodstrap  é a tag mais importante a largura do site será igual a largura do dispositivo-->
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/eventoEstilo.css">
	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" href="imagens/logo.png">
	<body>
		<div class="container-fluid">

	<!-- start header -->
	<!-- start header -->

			<header> 
				

				<!--Início da barra de menu -->

				<nav class="navbar navbar-expand-lg no-margin">
					<a class="navbar-brand d-none d-lg-block pr-5" href="index.html"><img id="logo"src="imagens/logo.png" alt=""></a>
					<a class="navbar-brand font-weight-bold d-lg-none d-block pl-2 logo" href="#background">Naomi</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fas fa-bars"></span>
					</button>

					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html#restaurante">Restaurante</a>
							</li>

							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html#atracoes">Atrações</a>
							</li>

							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html#cardapio">Cardápio</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="evento.php">Eventos</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html#localizacao">Localização</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="#footer">Contato</a>
							</li>
						</ul>
					</div>
				</nav>
				<script> //ao clicar em um link o menu recolhe
					$(document).ready(function () {
						$(".navbar-nav li a").click(function(event) {
							$(".navbar-collapse").collapse('hide');
						});
					});
				</script>
				<!-- imagem fixa -->
	<section id="slideshow" class="carousel slide carousel-fade no-margin" data-ride="carousel">
		<div class="carousel-inner">
			<figure class="carousel-item active">
				<img src="imagens/evento-unimed.jpg" alt="" class="img-fluid" style="width: 100%">
				
			</figure>
		</div>
	</section>
	<!-- end imagem fixa -->				
			</header>
	
	

	<!-- section evento -->
	<section id="evento">
		<div class="row"> 
			<div class="linha col-md-12 d-none d-md-block">		
		</div>
			<div class="linha1 col-md-12 d-md-none d-block">		
		</div>
		</div>
		<h2 style="padding-top: 10px;">Nosso espaço, seu evento!</h2>
		<img id="restaurante1">
		<article class="descricao">
			<p>Casamento? Aniversário? Confraternização? Torneio de futebol? Seja qual for o evento, nos te atendemos, faça seu orçamento online.</p>
			<p>Venha fazer seu evento no lugar mais gostoso de machado e região. Tranquilidade, agradabilidade que você só encontra aqui. #VEMPRONAOMI</p>
			<p id="p2"> Veja alguns eventos que já foram realizados no NAOMI...</p>
		</article>

		<!-- imagens -->
		<div class="row">
			<div class="col-md-3">
				<h5 class="text-center">Casamento</h5>
				<img src="imagens\casamento.jpg" alt="" width="70%" class="mx-auto d-block">
			</div>
			<div class="col-md-3">
				<h5 class="text-center"> Aniversário</h5>
				<img src="imagens\aniversario.jpg" alt="" width="70%" class="mx-auto d-block">
			</div>
			<div class="col-md-3">
				<h5 class="text-center">Confraternização</h5>
				<img src="imagens\cofraternizacao.JPG" alt="" width="73%" class="mx-auto d-block">
			</div>
			<div class="col-md-3">
				<h5 class="text-center">Torneio</h5>
				<img src="imagens\torneio.jpg" alt="" width="70%" class="mx-auto d-block">
			</div>
		</div> <!-- fim imagens -->

	<h4 id="ideia">Gostou da idéia?</h4>
		<h5>Faça seu orçamento sem compromisso.</h5>
		<img src="imagens\email.png" alt="" class=" img-fluid col-md-12 d-none d-block" style="width: 100%; padding: 0">

		<!-- formulario -->
		
		<section id="formulario">
			<div class="container">

				<form method="POST" action="processa.php">
					<div class="col-md-12">
						<p>Preencha os campos abaixo com seus dados e os do evento, retornaremos o mais rápido possível.</p>
					</div>
					<div class="row">
						<!-- dados pessoais -->
						<div class="col-md-6">
							<div class="form-group">
								<label >Qual é o seu nome completo?*</label>
								<input type="text" name="nome" value="" class="form-control" id="nome"required>
							</div>
							<!-- formatar mascaras -->
							<script type="text/javascript">
									$("#telefone").mask("(00)0000-0000");
    								$("#celular").mask("(00) 00000-0000");
    								$("#cpf").mask("000.000.000-00");
    								
    							</script>
							<div class="form-group">
								<label>Qual é o seu CPF?*</label>
								<input type="text" name="cpf" value="" class="form-control" id="cpf" placeholder="Digite o CPF sem pontos e traços." required>
							
							</div>
							<!-- <div class="form-group">
								<label>Qual é o seu RG?</label>
								<input type="text" name="rg" value="" class="form-control" id="rg" placeholder="Digite o RG sem pontos e traços.">
							</div> -->
							<div class="form-group">
								<label>Qual é seu e-mail?*</label>
								<input type="text" name="email" value="" class="form-control" id="email"required>
							</div>
							<div class="form-group">
								<label>Informe seu celular com DDD*</label>
								<input type="text" name="celular" value="" class="form-control telefone_ddd" id="celular" placeholder="Digite o numero sem pontos e traços."required> 
							</div>
							<div class="form-group">
								<label>Qual é o seu Telefone?</label>
								<input type="text" name="telefone" value="" class="form-control telefone_ddd" id="telefone" placeholder="Digite o numero sem pontos e traços.">
							</div>
								<div class="form-group">
									<label>Em que estado você mora?</label>
									<input type="text" name="estado" value="" class="form-control telefone_ddd" id="estado"> 
								</div>
							
							<div class="form-group">
								<label>Em qual cidade?</label>
									<input type="text" name="cidade" value="" class="form-control" id="cidade"> 
								</div>
								<div class="form-group">
								<label>Em qual bairro?</label>
									<input type="text" name="bairro" value="" class="form-control" id="bairro"> 
								</div>
								<div class="form-group">
								<label>Em qual rua?</label>
									<input type="text" name="rua" value="" class="form-control" id="rua"> 
								</div>
								<div class="form-group">
									<label>Numero/Complemento</label>
									<input type="text" name="numero" value="" class="form-control" id="numero">
								</div>	
								
							</div> <!-- end div col esquerda -->
							
						
							<!-- dados do evento -->
							<div class="col-md-6">
								<div class="form-group form-group-right">
									<label>Qual o tipo de evento?*</label>
									<input type="text" name="tipo" value="" class="form-control" id="tipo"required>
								</div>
								<div class="form-group">
									<label>Qual a data do evento*</label>
									<input type="date" name="data" value="" class="form-control" id="data" required>
								</div>
								<div class="form-group">
									<label>Qual a média de pessoas esperadas?*</label>
									<input type="text" name="pessoa" value="" class="form-control" id="pessoas" required>
								</div>
								<div class="form-group">
									<label>Qual o tempo médio de duração do evento?*</label>
									<input type="text" name="tempo" value="" class="form-control" id="tempo" required>
								</div>
								<div class="form-group">
							<label>Monte seu cardápio*</label>
							<textarea name="mensagem" cols="40" rows="5" class="form-control" id="mensagem" required placeholder="Monte seu cardápio e avaliaremos as possibilidades."></textarea>		
							</div> 
								<div>
									<label>Opções de bebidas*</label>
									<textarea name="bebida" cols="40" rows="5" class="form-control" id="bebid" required placeholder="Escolha as opções de bebidas e avaliaremos as possibilidades."></textarea>
								</div>
					
							<!-- dados informativos e botao -->	
							<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
								<button class="btn" type="submit" id="btn-enviar-contato" style="background-color: #f47425; ">Solicitar orçamento</button>
								<!-- erro ou sucesso na tela ao enviar -->
								<?php
									if(isset($_SESSION['msg'])){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									}
									?>
							</div>
						</div><!-- end col direita  -->
						</div><!-- end row principal -->
					</form> <!-- end formulario -->
				</div> <!-- end container -->
			</section><!-- end formulario -->
		</section><!-- fim do section restaurante -->

						<!-- footer start -->
						<footer id="footer" class="no-margin">
							<div class="footer-top text-center">

								<section class="row col-md-12">
									<div class="col-lg-4 col-md-12 agradecimentos">
										<h3>Pesqueiro e Restaurante Naomi</h3>
										<p>Obrigado por nos visitar!</p>
									</div>
									<div class="col-lg-4 col-md-12 contatos">
										<h4>Contate-nos</h4>

										<ul>
											<div style="color: #fff"><li class="fas fa-phone mr-1" style="color:#f47425;"></li>(35)98833-6020</div> <br>
											<div style="color: #fff"><li class="fas fa-envelope mr-1" style="color:#f47425;"></li>rpnaomimachado@gmail.com</div> <br>


										</ul>
										<div class="redes-sociais">
											<ul>
												<a target="_blank" href="https://www.facebook.com/rpnaomimachado"><span class="fab fa-facebook-f facebook"></span></a>
												<a target="_blank" href="https://instagram.com/rpnaomimachado?igshid=64ep5myutwbz"><span class="fab fa-instagram instagram" ></span></a>

											</ul>	
										</div>
									</div>
									<div class="col-lg-4 col-md-12 loc">
										<h4>Localização</h4>
										<p id="rua">Estrada Machado a Alfenas, Km 2 </p>
										<p id="rua">Machado - MG </p>
										<a href="index.html"><div style="color: #fff" ><li class="fas fa-home mr-1" style="color:#f47425" ></li>Voltar</div></a> 

									</div>
								</section>

							</div>
						</footer>
						<div class="copyright no-margin">
							<p id="copyright" style="color:rgb(244, 116, 37)">Copyright 2019 - by Bruna Amorim, Gabrielly Venâncio, Luís Otávio Caliari e Natália Paulino</p> 
						</div>
						<a href="#top" class="fas fa-angle-double-up"></a>
						<!-- criando uma function para o icon fas fa-angle-double-up levar o usuário ao topo da pagina -->
						<script>
							$(document).ready(function(){
								$(window).scroll(function(){
									if ($(this).scrollTop() > 100) {
										$('a[href="#top"]').fadeIn();
									} else {
										$('a[href="#top"]').fadeOut();
									}
								});
								$('a[href="#top"]').click(function(){
									$('html, body').animate({scrollTop : 0},800);
									return false;
								});
							});
						</script>
						<!-- end of footer -->

					</div>
				</body>
			</head>
			</html>