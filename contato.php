<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Agilium </title>
	<meta name="autor" content="Wanted">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-whidth, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">

	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>

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
					<a class="navbar-brand d-none d-lg-block pr-5" href="index.html"><img id="logo" src="imagens/logo.png" alt="Agilium Tech"></a>
					<a class="navbar-brand font-weight-bold d-lg-none d-block pl-2 logo" href="#background"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fas fa-bars"></span>
					</button>

					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item pr-3">

								<a class="nav-link" href="index.html#SobreNos">Sobre Nós</a>
							</li>

							<li class="nav-item pr-3">
								<a class="nav-link" href="index.html#modulos">Módulos</a>
							</li>

							<!-- <li class="nav-item pr-3">
								<a class="nav-link" href="formulario">Fale Conosco</a>
							</li> -->

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
		</header>

	</div>
	<div>
		<center>
			<img src="imagens/agilum.png" alt="">
		</center>
		</header>

		<h4 id="ideia">Gostou dos nossos serviços?</h4>
		<h5>Solicite seu orçamento sem compromisso.</h5>
		<img src="imagens\email.png" alt="" class=" img-fluid col-md-12 d-none d-block" style="width: 100%; padding: 0">

		<!-- formulario -->
			<section id="formulario">
		<div class="jumbotron jumbotron-fluid "> 
			<div class="container">
				
						<form action="trataEmail.php" name="form_contato" method="post" >
							<div class="col-md-12">
						<p>Preencha os campos abaixo com seus dados, retornaremos o mais rápido possível.</p>
					</div>
						<div class="col-md-6">
								<label >Nome:<sup class="asteristico">*</label>
								<input type="text" name="nome" value="" class="form-control" id="nome"required>
							
							<!-- formatar mascaras -->
							<script type="text/javascript">
									$("#telefone").mask("(00)0000-0000");
    								$("#celular").mask("(00) 00000-0000");
    								$("#cpf").mask("000.000.000-00");
    								
    							</script>
								<label>E-mail:</label>
								<input type="text" name="email" value="" class="form-control" id="email"required>
								<label>Telefone:</label>
								<input type="text" name="telefone" value="" class="form-control telefone_ddd" id="telefone" placeholder="">
							<label>Opções:</label>
					               	<input type="radio" name="pessoa" value="fisica"> Pessoa Física
					            	<p></p>
					            	<input type="radio" name="pessoa" value="juridica"> Pessoa Jurídica
					            	<p></p>
					        <label>Mensagem:<sup class="asteristico">*</label>
							<textarea name="mensagem" cols="40" rows="5" class="form-control" id="mensagem" required placeholder=""></textarea>		
							</div> 

      						<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
								<button class="btn" type="submit" id="btn-enviar-contato" style="background-color: rgb(244, 116, 37); ">Enviar</button>
        							<!-- <input type="reset" class="campo_submit" value="Limpar" />
        							<input type="submit" class="campo_submit" value="Enviar" /> -->
        						<?php
									if(isset($_SESSION['msg'])){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									}
									?>
							</div>
        						<!-- <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
      						</tr>

						</table> -->
					</form>
				</div>
			</div>
		</div>
		</section>	

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
<!-- footer start -->
<footer id="footer" class="no-margin">
	<div class="footer-top text-center">

		<section class="row col-md-12">
			<div class="col-lg-4 col-md-12 agradecimentos">
				<h3>Agilium Tech</h3>
				<p>Obrigado por nos visitar!</p>
			</div>
			<div class="col-lg-4 col-md-12 contatos">
				<h4>Contate-nos</h4>

				<ul>
					<a target="_blank" href="https://api.whatsapp.com/send?phone=5521997757150&text=Oi%2C%20tudo%20bem%3F%20Queria%20solicitar%20um%20or%C3%A7amento!"><span class="fab fa-whatsapp whatsapp" ></span> +55 (21) 99775-7150</a>
				</ul>
				<a href="index.html"><div style="color: #fff" ><li class="fas fa-home mr-1" style="color:#f47425" ></li>Voltar</div></a> 

			</div>
			<div class="col-lg-4 col-md-12 loc">
				<h4>Localização</h4>
				<p id="rua">Rio de Janeiro / RJ </p>

			</div>
		</section>

	</div>
</footer>
<div class="copyright no-margin">
	<p id="copyright" style="color:rgb(244, 116, 37)">Copyright 2019 - by WANTED</p> 
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
