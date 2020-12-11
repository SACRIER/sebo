<?php
//require "verifica.php"; 

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Novo Cadastro - Sebo Online</title>
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
                                <center>
                                    <h1> DENÚNCIA </h1>
                                </center>
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
                <?php
                    echo " <form method='POST' action='adddenuncia.php'>
									<div class='fields'>
										<div class='field half'>
											<input type='text' name='titulo' id='titulo' placeholder='Nome' />
										</div>
										<div class='field'>
                                        <textarea placeholder='Faça um comentário' name='mensagem' id='titulo' maxlength='255'></textarea>
										</div>
									</div>
								
                                    <center>
								<button>Adicionar</button>
								</center>
                                </form>
                                ";
                                ?>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>             
                                    
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   