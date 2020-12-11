<?php
//require "verifica.php"; 

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Perfil - Sebo Online</title>
		<img src="images/logo.png" width="300" height="200"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
            <header id="header">
						<div class="inner">

							<!-- Logo --
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>-->

							<!-- Nav -->
								<nav>
									<ul>
									<li>
										<?php 
											//echo "<b>Olá, </b>".$_SESSION['login']." |  "; 
										?>
									</li>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="principal.php">Itens à venda</a></li>
							<li><a href="livrosusuario.php">Meus livros</a></li>
							<li><a href="desejos.php">Lista de Desejos</a></li>
							<li><a href="historicopedidos.php">Histórico de pedidos</a></li>
							<li><a href="vendasusuario.php">Minhas vendas</a></li>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
							<?php
											include_once('conect.php');
											require "verifica.php"; 
			                                $email = $_SESSION['email'];
			                                $senha = $_SESSION['senha'];
			                                $sql = "SELECT * FROM cadastro WHERE email = '$email'";
			                                $result = mysqli_query($conn, $sql);
			                                while($dados=mysqli_fetch_array($result)) {
											$id = $dados["id"];
			                                $email = $dados["email"];
                                            $senha = $dados["senha"];
                                            $cpf = $dados["cpf"];
                                            $nomecompleto = $dados["nomecompleto"];
                                            $endereco = $dados["endereco"];
                                            $bairro = $dados["bairro"];
                                            $cidade = $dados["cidade"];
                                            $estado = $dados["estado"];
                                            $cep = $dados["cep"];
			                                echo "
											<form method='POST' action='alteraperfil.php' enctype='multipart/form-data'>
			                                <input type='hidden' name='id' value='$id'>
						                    <label><b>E-mail:</b></label>
						                    <input type='email' value='$email' id='email' name='email' required />
						                    <label><b>Senha:</b></label>
                                            <input type='text' value='$senha' id='senha' name='senha' required />
                                            <label><b>CPF:</b></label>
						                    <input type='text' value='$cpf' id='cpf' name='cpf' maxlength='11' minlength='11' required />
						                    <label><b>Nome completo:</b></label>
                                            <input type='text' value='$nomecompleto' id='nomecompleto' name='nomecompleto' required />
                                            <label><b>Endereço:</b></label>
						                    <input type='text' value='$endereco' id='endereco' name='endereco' required />
						                    <label><b>Bairro:</b></label>
                                            <input type='text' value='$bairro' id='bairro' name='bairro' required />
                                            <label><b>Cidade:</b></label>
						                    <input type='text' value='$cidade' id='cidade' name='cidade' required />
						                    <label><b>Estado:</b></label>
                                            <input type='text' value='$estado' id='estado' name='estado' required />
                                            <label><b>CEP:</b></label>
						                    <input type='text' value='$cep' id='cep' name='cep' maxlength='8' minlength='8' required />
						                   
						                    
						                    <ul class='actions'>
	                                        <input type='hidden' name='operacao' value='alterar'>
	                                        <br><li><input type='submit' value='Alterar' class='primary' /></li>
	                                        </ul>
	                                        </form>

						                    ";
						                    }
						                    ?>
							</section>
							
						
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>             
                                    
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                    
						     